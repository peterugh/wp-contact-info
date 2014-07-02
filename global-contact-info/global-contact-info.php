<?php
/*
Plugin Name: Contact & Social Media Info
Plugin URI: http://rughsterdesign.com
Description: Set site wide contact and social media infomation
Version: 0.1
Author: Pete Rugh
Author URI: http://rughsterdesign.com
License: All Rights Reserved
*/

/*  
Copyright 2014 Peter Rugh  (email : peterugh@gmail.com)
All Rights Reserved
*/

// Include the class
include('ContactInfo.php');

// create an instance of the plugin
$contact_info = new Contact_Info;

// trigger plugin actions based on WP events
add_action('admin_menu', array($contact_info, 'adminOptions'));