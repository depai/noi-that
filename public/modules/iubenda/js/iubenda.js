/**
 * @file
 * Adds the Iubenda script to a page.
 */

 "use strict";

 // Create this variable globally, so that it can be used by the Iubenda scripts.
 var _iub = _iub || [];
 
 var settings = drupalSettings.iubenda;
 
 // Populate the Iubenda configuration using the values from Drupal Settings.
 _iub.csConfiguration = {
   "lang": settings.language,
   "siteId": settings.site_id,
   "cookiePolicyId": settings.policy_id,
   "enableCcpa": settings.show_ccpa === 1 ? true : false,
   "enableGdpr": settings.show_gdpr === 1 ? true : false,
   "countryDetection": settings.country_detection === 1 ? true : false,
   "banner": {
     "position": settings.position,
     "applyStyles": settings.apply_styles === 1 ? true : false,
     "acceptButtonDisplay": settings.buttons.accept_button === 1 ? true : false,
     "acceptButtonCaption": settings.buttons.accept_button_text,
     "rejectButtonDisplay": settings.buttons.reject_button === 1 ? true : false,
     "customizeButtonDisplay": settings.buttons.customize_button === 1 ? true : false,
   },
 };