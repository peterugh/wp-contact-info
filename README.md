Global Contact Info
===============

Wordpress Global Contact & Social Media Info Plugin

This plugin adds a contact info page to the settings section on your WP admin menu. After you fill out all the desired fields, you can access the information by using the get_option() WP function. 

    $contact_info = get_option('contact_options');

This will return an array of values you saved in the backend. The array keys are as follows:

    email_business
    email_general
    email_jobs
    email_personal
    facebook_url
    google_plus_url
    instagram_url
    linkedin_url
    phone
    street_address
    twitter_url
    vimeo_url
    vine_url
    youtube_url

This plugin can only be called in the template. There aren't shortcode or widget methods. Feel free to contribute to the project especially if you want to add these features. 

If you want more social options added, please ask. <peterugh@gmail.com>