
/**
 * @file
 * Toggle map contacts
 */

(function ($) {
  'use strict';

   //continents toggle
   $(document).on('click','.contacts-list-geolocate h3', function(){
     let el =  $(this).next('.view-content-wrap');
    $('.contacts-list-geolocate h3').not(this).removeClass('icon');
     $(this).toggleClass('icon')
    $('.contacts-list-geolocate .view-content-wrap').not(el).removeClass('active');
     el.toggleClass('active');
   })
  
   //state toogle

   $(document).on('click','.contacts-list-geolocate .contact-state', function(){
    let el =  $(this).next('.contact-info');
   $('.contacts-list-geolocate .contact-info').not(el).removeClass('active');
    el.toggleClass('active');
  })

})(jQuery);


/**
 * @file
 * Contains the definition of the behaviour storeLocatorMap.
 */

(function ($, Drupal, drupalSettings) {
    'use strict';

    /**
     * Attaches the Store Locator Behaviour.
     */
    //if($("#contact-map-container").length) {
          $.getJSON(Drupal.url('json/contacts'), function (json) {
            initMap(json);
      });
   // }
 

})(jQuery, Drupal, drupalSettings);

/**
 * Initialize map based on Latitude & Longitude.
 */
function initMap(data) {
    'use strict';
    //clear html from map selector
    jQuery('#contact-map-container').html('');
    var map = new google.maps.Map(document.getElementById('contact-map-container'), {
        zoom: 2,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        zoomControl: true,
        styles:[
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "featureType": "administrative",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#050505"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "administrative.country",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#b6afaf"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "administrative.country",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#2c2b2b"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "administrative.country",
              "elementType": "labels.text",
              "stylers": [
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "administrative.locality",
              "elementType": "geometry",
              "stylers": [
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "administrative.province",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#2c2b2b"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "landscape.natural",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#f2f2f2"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#dadada"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "transit",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#2d0101"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                },
                {
                  "visibility": "on"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            }
          ]
    });

    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    var marker;
    for (let i = 0; i < data.length; i++) {
            map.setCenter({
                lat: parseFloat(data[i].field_latitude),
                lng: parseFloat(data[i].field_longitude)
            });
            marker = new google.maps.Marker({
                map: map,
                // icon: 'https://www.ruralshores.com/assets/marker-icon.png',
                icon: '/themes/gavias_facdori/images/marker-pin.png',
                position: {
                    lat: parseFloat(data[i].field_latitude),
                    lng: parseFloat(data[i].field_longitude)
                }
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent('<div class="contact-details"><h4 class="title">' + data[i].field_state + '</h4><h4 class="store-name">' + data[i].field_company_name + '</h4><p class="field_full_address">'+data[i].field_full_address+'</p><a href="mailto:' + data[i].field_email + '">' + data[i].field_email + '</a><a href="://' + data[i].field_website + '">' + data[i].field_website + '</a></div>');
                    infowindow.open(map, marker);
                }
            })(marker, i));
    }

}