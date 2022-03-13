
(function($, Drupal, drupalSettings) {
    $(document).ready(function() {
        
      var formSelectors = drupalSettings.d8_recaptcha_v3.captcha_selectors;
      var sitekey = drupalSettings.d8_recaptcha_v3.site_key;
      var badge_position = drupalSettings.d8_recaptcha_v3.badge_position;
      
      if($(formSelectors).length){
          window.recaptchaLoadCallback = function() {
            grecaptcha.render({
              'sitekey' : sitekey,
              'badge' : badge_position,
              
            });
          };	
  
          $.getScript( "https://www.google.com/recaptcha/api.js?onload=recaptchaLoadCallback" );
      
          $(formSelectors).each(function() {
              $(this).on("submit", function(e) {
                  
                  var form = $(this);
                  
                  if(!$(form).hasClass('captched')){
                      e.preventDefault();
                      e.returnValue = false;
                  }
                  else{
                      return;
                  }
  
          if ($(form).attr('id')) {
            return;
          }
                  
                var unique_form_id = $(form).attr('id').replace(/[^\w\s]/gi, '');
            
                  grecaptcha.ready(function() {
                      grecaptcha.execute(0, {action: unique_form_id}).then(function(token) {
                          // add token to form
                          $(form).prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                          $.post("/d8_recaptcha_request",{token: token}, function(result) {
                                  console.log(result);
                                  
                                  if(result.data.success) {
                                      if(result.data.score >= 0.6) {
                                          $(form).addClass("captched");
                                          $(form).submit();							
                                      }
                                      else{
                                          console.log('You are spamer!');
                                          return false;
                                      }
                                  } else {
                                      console.log('Integration error!');
                                      $(form).addClass("captched");
                                      $(form).submit();	
                                  }
                          });
                      });;
                  });
              });			
          });
      }		
    });  
  })(jQuery, Drupal, drupalSettings);