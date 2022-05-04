jQuery(document).ready(function() {


    var slickGeneralSettings = {
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    };

    // form trackings
    // product request info en/it
    jQuery('.webform-submission-request-information-form').submit(function() {
        var pathname = window.location.pathname;
        var event_category = (pathname.includes('it/')) ? 'Form_products_it' : (pathname.includes('ar/') ? 'Form_products_ar' : 'Form_products_en')
        gtag('event', 'Generazione_contatto', {
            'event_category': event_category,
            'event_label': 'Sezione_catalogo',
            'value': 1
        });
        pintrk('track', 'lead');
        fbq('track', 'lead');
        preventDefault();
    });

    // contacts en/it
    jQuery('#webform-submission-contact-node-153-add-form').submit(function() {
        var pathname = window.location.pathname;
        var event_category = (pathname.includes('it/')) ? 'Form_products_it' : (pathname.includes('ar/') ? 'Form_products_ar' : 'Form_products_en')
        gtag('event', 'Generazione_contatto', {
            'event_category': event_category,
            'event_label': 'Istituzionale',
            'value': 1
        });
        pintrk('track', 'lead');
        fbq('track', 'lead');
        preventDefault();
    });

    /*     var form = document.getElementById('webform-submission-contact-node-153-add-form');
        form.addEventListener('submit', function(event) {
          alert('stop');
          event.preventDefault();
          gtag('event', 'Generazione_contatto',  {
            'event_category': event_category,
            'event_label': 'Istituzionale',
            'value': 1
           });
           pintrk('track', 'lead');
        }); */






    // home page
    // autoplay video
    jQuery('.play-video-btn').on('click', function() {
        if (jQuery('video').length == 1) {
            jQuery('video').get(0).play();
            jQuery(this).hide();
            // jQuery('.discover-row').show();
        }
    });

    // video background play stop
    jQuery(".video-row").click(function() {
        let video = jQuery('video')[0];
        video[video.paused ? 'play' : 'pause']();
    });

    jQuery(".events-home-list .view-content-wrap").slick(slickGeneralSettings);

    // jQuery('.field--name-field-available-materials').slick({
    //     infinite: true,
    //     slidesToShow: 5,
    //     slidesToScroll: 1
    // });

    if (jQuery(".field--name-field-available-materials").children().length == 0) {
        jQuery("p.available-materials").hide();
    }

    jQuery('.cat-page-prodlist .view-content-wrap').slick(slickGeneralSettings);
    // .collection-prodlist .collection-category-prodlist-mobile
    jQuery('.collection-category-prodlist-mobile .view-content-wrap').slick(slickGeneralSettings);

    // go back button
    jQuery('.title-wrapper i.fas.fa-chevron-left').on('click', function() {
        window.history.back();
    });

    // 404 Page Hide Title
    var pageTitle = jQuery('.header-title').children().children().children().children().text();
    if (pageTitle.trim() === "404") {
        jQuery('body').addClass('hide-page-title');
    }

    // product page
    // move post title
    if (window.innerWidth <= 767) {
        if (jQuery('body').hasClass('node--type-product') === true) {
            jQuery('.post-title').insertBefore('.product-media');
        }
    }

    function changeOrLetTitleAtTheTop() {

        if (jQuery('body').hasClass('node--type-product') === true) {
            if (window.innerWidth <= 767) {
                jQuery('.post-title').insertBefore('.product-media');
            } else {
                jQuery('.product-title').append(jQuery('.post-title'));
            }
        }
    }

    window.onresize = function() {
        changeOrLetTitleAtTheTop();
    }

    window.materialModalOpened = false;
    window.featuredImageLightboxOpened = false;
    window.contactFormRichiediOpened = false;
    window.contactFormRichiediOpenedCount = 0;

    // product page
    // materials popup
    if (jQuery('body').hasClass('node--type-product') === true) {

        jQuery('.product-info .item-image img').on('click', function() {

            if (jQuery('.modal-material').length === 1) {
                jQuery('.modal-material').remove();

                window.materialModalOpened = false;
            }

            // create modal
            var materialName = jQuery(this).attr('title');
            var src = jQuery(this).attr('src');

            var modal = document.createElement('div');
            modal.classList.add('modal-material');

            var modalImage = document.createElement('img');
            modalImage.classList.add('modal-material-img');
            modalImage.src = src;

            var modalName = document.createElement('p');
            modalName.classList.add('material-name');
            modalName.innerText = materialName;

            var modalClose = document.createElement('div');
            modalClose.classList.add('modal-material-close');
            modalClose.innerHTML = '<i class="fas fa-times"></i>';

            modal.append(modalImage);
            modal.append(modalName);
            modal.append(modalClose);

            if (window.materialModalOpened == false &&
                window.featuredImageLightboxOpened === false &&
                window.contactFormRichiediOpened === false) {

                document.body.append(modal);
                disableHover();
            }

            if (jQuery('.modal-material').length === 1) {
                window.materialModalOpened = true;

                // close material modal
                jQuery('.modal-material-close').on('click', function() {
                    if (jQuery('.modal-material').length === 1 && window.materialModalOpened === true) {
                        jQuery('.modal-material').remove();
                        window.materialModalOpened = false;
                        enableHover();
                    }
                });
            }

        })
    }

    // product page
    // contact form
    if (jQuery('body').hasClass('node--type-product') === true) {

        jQuery('.product-asinfo').click(function() {
            if (window.contactFormRichiediOpened === false &&
                window.materialModalOpened === false &&
                featuredImageLightboxOpened === false) {

                disableHover();

                var closeRichiediInfo = document.createElement('div');
                closeRichiediInfo.classList.add('close-webform-modal');
                closeRichiediInfo.innerHTML = '<i class="fas fa-times"></i>';

                if (window.contactFormRichiediOpenedCount == 0) {
                    jQuery('#block-webform').append(closeRichiediInfo);
                    window.contactFormRichiediOpened = true;
                    ++window.contactFormRichiediOpenedCount;
                }

                jQuery('.close-webform-modal').on('click', function() {
                    jQuery('#block-webform').css('display', 'none');
                    window.contactFormRichiediOpened = false;
                    enableHover();
                });

                jQuery('#block-webform').css('display', 'block');
            }
        });

        jQuery('.product-asinfo-2').click(function() {
            if (window.contactFormRichiediOpened === false &&
                window.materialModalOpened === false &&
                featuredImageLightboxOpened === false) {

                disableHover();

                jQuery('.close-webform-modal-2').on('click', function() {
                    jQuery('#block-webform-2').css('display', 'none');
                    window.contactFormRichiediOpened = false;
                    enableHover();
                });

                jQuery('#block-webform-2').css('display', 'block');
            }
        });

        jQuery('.close-webform-modal-3').on('click', function() {
            jQuery('#block-webform-3').css('display', 'none');
        });
    }

    // product page
    // featured image lightbox
    // if(jQuery('body').hasClass('node--type-product') === true) {

    //     jQuery('.product-media .item-image').on('click', function(){

    //         if(window.contactFormRichiediOpened === false &&
    //             window.materialModalOpened === false &&
    //             window.featuredImageLightboxOpened === false) {

    //             // create modal
    //             var src = jQuery(this).children().attr('src');

    //             var lightbox = document.createElement('div');
    //             lightbox.classList.add('lightbox-custom');

    //             var lightboxImage = document.createElement('img');
    //             lightboxImage.classList.add('lightbox-img');
    //             lightboxImage.src = src;

    //             var lightboxClose = document.createElement('div');
    //             lightboxClose.classList.add('lightbox-close');
    //             lightboxClose.innerHTML = '<i class="fas fa-times"></i>';

    //             lightbox.append(lightboxImage);
    //             lightbox.append(lightboxClose);

    //             document.body.append(lightbox);

    //             window.featuredImageLightboxOpened = true;

    //             jQuery('.lightbox-close').on('click', function () {
    //                 jQuery('.lightbox-custom').remove();
    //                 window.featuredImageLightboxOpened = false;
    //             });
    //         }
    //     });

    // }

    function enableHover() {
        jQuery('.product-media .item-image').removeClass('not-hover');
        jQuery('.product-media .item-image').css('cursor', 'pointer');
    }

    function disableHover() {
        jQuery('.product-media .item-image').addClass('not-hover');
        jQuery('.product-media .item-image').css('cursor', 'default');
    }

    // category page
    // view more
    // var textLength = jQuery('.category-desc').children().html().length;
    if (jQuery('.category-desc').children().html() != undefined) {
        var textLength = jQuery('.category-desc').children().html().length;
    } else {
        var textLength = 1;
    }
    var textLimit = 450;

    if (textLength > textLimit) {
        var initialText = jQuery('.category-desc').children().html();
        var cuttedText = initialText.substring(0, textLimit);

        jQuery('.category-desc').children().html(cuttedText);

        jQuery('.read-more').show();

        jQuery('.read-more').on('click', function() {

            jQuery('.category-desc').children().html(initialText);

            jQuery(this).hide();
            jQuery('.read-less').show();
        });

        jQuery('.read-less').on('click', function() {

            jQuery('.category-desc').children().html(cuttedText);

            jQuery(this).hide();
            jQuery('.read-more').show();
        });

    }

    // contact page
    // open modal

    jQuery('#open-contact-form').click(function() {
        var closeRichiediInfo = document.createElement('div');
        closeRichiediInfo.classList.add('close-webform-modal');
        closeRichiediInfo.innerHTML = '<i class="fas fa-times"></i>';

        if (window.contactFormRichiediOpenedCount == 0) {
            jQuery('.block-webform').append(closeRichiediInfo);
            jQuery('html, body').animate({ scrollTop: 100 }, 50);
        }

        jQuery('.close-webform-modal').on('click', function() {
            jQuery('.block-webform').css('display', 'none');
        });

        jQuery('.block-webform').css('display', 'block');
        // jQuery('.contact-form-contacts').show();
    });


    //homepage fixes

    if (document.body.classList.contains('frontpage') && window.innerWidth < 767) {
        jQuery('.center-col').insertBefore('.text-none.lion-image');
        jQuery('.padding-0-left-right').insertBefore('.infinity-row');
    }

    //product page fixes


    var currentIndex = 0;

    if (document.body.classList.contains('node--type-product') && window.innerWidth < 767) {
        jQuery('.title-collezione').insertBefore('.post-title');
        var img = document.createElement('img');
        img.classList.add('img-replace')
        var imgContainer = document.querySelector('.post-thumbnail');
        imgContainer.appendChild(img);
        jQuery('.img-replace').insertBefore('.item-image');
        let images = document.querySelectorAll('.product-media img:not(.img-replace)');
        var imgOnTop = document.querySelector('.img-replace');
        let i = 0;

        function changeImg() {
            imgOnTop.src = images[i].src;
            activeDot();
        }

        //   function autoSlide() {
        //       if (i < images.length - 1) {
        //           i++;
        //       }
        //       else {
        //           i = 0;
        //       }
        //       changeImg();
        //   }
        //   setInterval(autoSlide, 4000);


        var dotsDiv = document.createElement('div');
        if (images.length > 1) {
            const mediaContainer = document.querySelector('.post-thumbnail');
            dotsDiv.classList.add('dots-container');
            mediaContainer.appendChild(dotsDiv);
        }

        function createDot() {
            for (let j = 0; j < images.length; j++) {
                var dot = document.createElement('div');
                dot.classList.add('dot');
                dotsDiv.appendChild(dot);
            }
            dotsDiv.children[0].classList.add('active');
            changeImg();
        }

        createDot();
        var clickDot = document.querySelectorAll('.dot');

        function activeDot() {
            var currentActive = document.querySelector('.dot.active');
            currentActive.classList.remove('active');
            dotsDiv.children[i].classList.add('active');
        }

        for (let index = 0; index < clickDot.length; index++) {
            clickDot[index].addEventListener('click', function() {
                currentIndex = index;
                i = index;
                changeImg();
            })
        }
    }

    // subscribe

    jQuery('#edit-mergevars-email').on('blur', function() {
        jQuery('label[for="edit-mergevars-email"]').css('top', '15px');
    })

    jQuery('#edit-mergevars-email').on('focus', function() {
        jQuery('label[for="edit-mergevars-email"]').css('top', '-20px');
    })

    // menu back button

    jQuery('.back-menu-m').on('click', function() {
        jQuery(this).parent('ul').css('display', 'none');
    })

    //eventi singolo fixes

    if (document.body.classList.contains('node--type-event') && window.innerWidth <= 1024) {
        let prev = document.querySelector('.event-prev:not(i)');
        let next = document.querySelector('.event-next');
        prev.innerText = ' ';
        next.innerText = ' ';
    }

    //press singolo fixes

    if (document.body.classList.contains('node--type-press') && window.innerWidth < 767) {
        let prev = document.querySelector('.event-prev:not(i)');
        let next = document.querySelector('.event-next');
        prev.innerText = ' ';
        next.innerText = ' ';
    }

    //contact page fixes

    if (document.body.classList.contains('contact-page') && window.innerWidth <= 1024) {
        jQuery('.contacts-list').insertBefore('#footer');
        jQuery('#open-contact-form').insertAfter('.contacts-list');
    }

    //add class to body

    /* var url = window.location.href;
    if(url === 'https://giorgio.evolvestudio.de/collections/charisma') {
      document.body.classList.add('collection-product');
    }

    if(url === 'https://giorgio.evolvestudio.de/benches-bedroom') {
      document.body.classList.add('category-notte-letti');
    }

    if(url === "https://giorgio.evolvestudio.de/night") {

      document.body.classList.add('category-notte-page');

      var check = document.querySelectorAll('.gva-view')

      for(let i = 0; i < check.length; i++) {
          if(check[i].textContent.trim() === "") {
              check[i].parentElement.parentElement.parentElement.parentElement.style.display = 'none';
          }
      }

    } */

    // product image gallery
    var current, size;

    jQuery('.product-media .item-image').click(function(e) {

        // prevent default click event
        e.preventDefault();

        // grab href from clicked element
        var image_href = jQuery(this).find("img").attr("src");

        // determine the index of clicked trigger
        var slideNum = jQuery('.product-media .item-image').index(this);

        if (currentIndex > 0) {
            // workaround
            // on mobile, if user have pressed a dot
            // use dot index as index
            slideNum = currentIndex;
        }

        // find out if #lightbox exists
        if (jQuery('#lightbox').length > 0) {
            // #lightbox exists
            jQuery('#lightbox').fadeIn(300);
            // #lightbox does not exist - create and insert (runs 1st time only)
        } else {
            // create HTML markup for lightbox window
            var lightbox =
                '<div id="lightbox">' +
                '<i class="fal fa-times close-lightbox"></i>' +
                '<div id="slideshow">' +
                '<div class="nav">' +
                '<a class="prev slide-nav"><i class="fas fa-arrow-circle-left arrow-lightbox"></i></a>' +
                '<a class="next slide-nav"><i class="fas fa-arrow-circle-right arrow-lightbox"></i></a>' +
                '</div>' +
                '</div>' +
                '</div>';

            //insert lightbox HTML into page
            jQuery('body').append(lightbox);

            // fill lightbox with #imageSet .thumb hrefs in #imageSet
            jQuery('.product-media').find('.item-image img').each(function() {
                var jQueryhref = jQuery(this).attr('src');
                jQuery('#slideshow').append(
                    '<img src="' + jQueryhref + '">'
                );
                console.log(jQueryhref);
            });

        }

        // setting size based on number of objects in slideshow
        size = jQuery('#slideshow img').length;

        // hide all slide, then show the selected slide
        jQuery('#slideshow img').hide();
        jQuery('#slideshow img:eq(' + slideNum + ')').show();

        // set current to selected slide
        current = slideNum;
    });

    //Click anywhere on the page to get rid of lightbox window
    jQuery('body').on('click', '#lightbox', function() { // using .on() instead of .live(). more modern, and fixes event bubbling issues
        jQuery('#lightbox').fadeOut(300);
    });

    // show/hide navigation when hovering over #slideshow
    jQuery('body').on({
        mouseenter: function() {
            jQuery('.nav').fadeIn(300);
        },
        mouseleave: function() {
            jQuery('.nav').fadeOut(300);
        }
    }, '#slideshow');

    // navigation prev/next
    jQuery('body').on('click', '.slide-nav', function(e) {

        // prevent default click event, and prevent event bubbling to prevent lightbox from closing
        e.preventDefault();
        e.stopPropagation();

        var jQuerythis = jQuery(this);
        var dest;

        // looking for .prev
        if (jQuerythis.hasClass('prev')) {
            dest = current - 1;
            if (dest < 0) {
                dest = size - 1;
            }
        } else {
            // in absence of .prev, assume .next
            dest = current + 1;
            if (dest > size - 1) {
                dest = 0;
            }
        }

        // fadeOut curent slide, FadeIn next/prev slide
        jQuery('#slideshow img:eq(' + current + ')').fadeOut(100);
        jQuery('#slideshow img:eq(' + dest + ')').fadeIn(100);

        // update current slide
        current = dest;
    });

    // Download cataloghi solo agli utenti loggati

    if (jQuery('body').hasClass('logged-in') === false) {
        jQuery('.collezione-catalog a').attr("href", 'https://giorgiocollection.com/privatearea-3d-2d-hd');

    }



});
