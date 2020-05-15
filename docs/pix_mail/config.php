<?php
    $mail_type = "ce";
    //-----------------------------------------------------------------------------------------
    $to_Email       = ""; //Replace with recipient email address
    $subject        = ''; //Subject line for emails
    
    // your recaptcha secret key
    $secret = "";      // Add your reCAPTCHA secret key
    //----------------------------------------------------------    -------------------------------
    
    // Language
    $language = "EN";
    
    
    
    // SMTP Settings
    define('SMTP_HOST', '');
    define('SMTP_USER', '');
    define('SMTP_PASS', '');
    
    
    /* Mailchimp setting. */
    define('MC_APIKEY', ''); // Your API key from here - http://admin.mailchimp.com/account/api
    
    /* Campaign Monitor setting. */
    define('CM_APIKEY', ''); // Your APIKEY from here - https://pixfort.createsend.com/admin/account/
    
    /* GetResponse setting. */
    define('GR_APIKEY', ''); // Your API key from here - https://app.getresponse.com/my_api_key.html
    
    /* AWeber setting */
    define('AW_AUTHCODE', ''); // Your Authcode from here - https://auth.aweber.com/1.0/oauth/authorize_app/647b2efd
    
    /* ActiveCampaign setting */
    define("ACTIVECAMPAIGN_URL", ""); // API_URL : Go to My Settings - > Developers
    define("ACTIVECAMPAIGN_API_KEY", ""); // API_KEY : Go to My Settings - > Developers
    
    /* MailerLite setting */
    define("MailerLite_API_KEY", ""); // API Key: Go to https://app.mailerlite.com/integrations/api/
    
    /* FreshMail setting */
    define ( 'FM_API_KEY', '' ); // API Key: Go to https://app.freshmail.com/en/settings/integration/
    define ( 'FM_API_SECRET', '' ); // API Secret: Go to https://app.freshmail.com/en/settings/integration/
    
    /* Sendloop setting */
    define("Sendloop_API3_KEY", ''); // API Key
    define("Sendloop_SUBDOMAIN", ''); // LIST ID (GroupID)
    
    
    /* MailWizz setting */
    define("Mailwizz_apiUrl", ''); // API URL, Should be http://www.yourdomain.com/api/index.php (where MailWizz is installed)
    define("Mailwizz_publicKey", ''); // Public Key: Go to "Api Keys" and create new key
	define("Mailwizz_privateKey", ''); // Private Key: Go to "Api Keys" and get the private key
	
	/* Sendy setting */
    define("Sendy_URL", ''); // Your Sendy installation URL (without trailing slash).
    define("Sendy_apikey", ''); // Your API key. Available in Sendy Settings.
    
    /* Hubspot setting */
    define("Hubspot_api", '');

    /* iContact setting */
    define("iContact_appId", '');
    define("iContact_apiPassword", '');
    define("iContact_apiUsername", '');
    
?>