<?php

class Contact_Info {

	public function __construct()
	{
		/* empty on purpose */
	}
	public function success()
	{
		echo 'success';
	}
	public function adminOptions()
	{
		register_setting( 'contact_options', 'contact_options', array($this, 'prep_contact_options'));

		// put an options page in the setting menu
		add_options_page(
			'Contact Info',
			'Contact Info',
			'edit_theme_options',
			'contact_info',
			array($this, 'render_contact_options')
		);

		// add Contact Info Section
		add_settings_section(
			'contact_info_section',
			'Contact Info',
			array($this, 'contact_info_setting_section'),
			'contact_info'
		);

		// Add field to Contact Info Section
		add_settings_field(
			'input_phone',
			'Phone Number',
			array($this, 'phone_number_field'),
			'contact_info',
			'contact_info_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_street_address',
			'Street Address',
			array($this, 'street_address_field'),
			'contact_info',
			'contact_info_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_email_contact',
			'Email - General',
			array($this, 'email_contact_field'),
			'contact_info',
			'contact_info_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_email_personal',
			'Email - Personal',	
			array($this, 'email_personal_field'),
			'contact_info',
			'contact_info_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_email_business',
			'Email - Business',
			array($this, 'email_business_field'),
			'contact_info',
			'contact_info_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_email_jobs',
			'Email - Jobs',
			array($this, 'email_jobs_field'),
			'contact_info',
			'contact_info_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_email_other',
			'Email - Other',
			array($this, 'email_other_field'),
			'contact_info',
			'contact_info_section'
		);



		// Add Social Media Section
		add_settings_section(
			'social_media_section',
			'Social Media',
			array($this, 'social_media_setting_section'),
			'contact_info'
		);

		// Add field to Contact Info Section
		add_settings_field(
			'input_facebook',
			'Facebook URL',
			array($this, 'fb_field'),
			'contact_info',
			'social_media_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_twitter',
			'Twitter URL',
			array($this, 'tw_field'),
			'contact_info',
			'social_media_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_instagram',
			'Instagram URL',
			array($this, 'ig_field'),
			'contact_info',
			'social_media_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_linkedin',
			'Linkedin URL',
			array($this, 'li_field'),
			'contact_info',
			'social_media_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_google_plus',
			'Google+ URL',
			array($this, 'gp_field'),
			'contact_info',
			'social_media_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_pinterest',
			'Pinterest URL',
			array($this, 'pin_field'),
			'contact_info',
			'social_media_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_youtube',
			'YouTube URL',
			array($this, 'yt_field'),
			'contact_info',
			'social_media_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_vimeo',
			'Vimeo URL',
			array($this, 'vim_field'),
			'contact_info',
			'social_media_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_github',
			'Github URL',
			array($this, 'gh_field'),
			'contact_info',
			'social_media_section'
		);
		// Add field to Contact Info Section
		add_settings_field(
			'input_vine',
			'Vine URL',
			array($this, 'vin_field'),
			'contact_info',
			'social_media_section'
		);
	}
	public function render_contact_options()
	{
		?>
		<form action="options.php" method="post">
			<?php settings_fields('contact_options'); ?>
			<?php 
				do_settings_sections('contact_info'); 
			?>

			<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
		</form>
	    <?php
	}
	public function contact_info_setting_section()
	{
		?>
		<p>
			The information on this page can be used universally on your site. It does not effect core Wordpress information such as the email address used for admin purposes. 
		</p>
		<?php
	}
	public function phone_number_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_phone" name="contact_options[phone]" size="40" type="text" value="' . $options['phone'] . '" />';
	}
	public function street_address_field()
	{
		$options = get_option('contact_options');
		$prettyAddress = strip_tags($options['street_address']);
		echo '<textarea id="input_street_address" name="contact_options[street_address]" rows="5" cols="40">' . $prettyAddress . '</textarea>';
	}
	public function email_contact_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_email_contact" name="contact_options[email_general]" size="40" type="text" value="' . $options['email_general'] . '" />';
	}
	public function email_business_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_email_business" name="contact_options[email_business]" size="40" type="text" value="' . $options['email_business'] . '" />';
	}
	public function email_personal_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_email_personal" name="contact_options[email_personal]" size="40" type="text" value="' . $options['email_personal'] . '" />';
	}
	public function email_jobs_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_email_jobs" name="contact_options[email_jobs]" size="40" type="text" value="' . $options['email_jobs'] . '" />';
	}
	public function email_other_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_email_other" name="contact_options[email_other]" size="40" type="text" value="' . $options['email_other'] . '" />';
	}
	public function prep_contact_options($input)
	{
		$brAddress = trim(nl2br($input['street_address']));
		$input['street_address'] = $brAddress;
		return $input;
	}
	public function social_media_setting_section()
	{
		?>
		<p>
			This information can be used universally on your site. (Do you have a site you'd like included? Let me know: <a href="mailto:pete@rughsterdesign.com">pete@rughsterdesign.com</a>)
		</p>
		<?php
	}
	public function fb_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_facebook" name="contact_options[facebook_url]" size="40" type="text" value="' . $options['facebook_url'] . '" />';
	}
	public function tw_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_twitter" name="contact_options[twitter_url]" size="40" type="text" value="' . $options['twitter_url'] . '" />';
	}
	public function ig_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_instagram" name="contact_options[instagram_url]" size="40" type="text" value="' . $options['instagram_url'] . '" />';
	}
	public function li_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_linkedin" name="contact_options[linkedin_url]" size="40" type="text" value="' . $options['linkedin_url'] . '" />';
	}
	public function yt_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_youtube" name="contact_options[youtube_url]" size="40" type="text" value="' . $options['youtube_url'] . '" />';
	}
	public function vim_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_vimeo" name="contact_options[vimeo_url]" size="40" type="text" value="' . $options['vimeo_url'] . '" />';
	}
	public function vin_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_vine" name="contact_options[vine_url]" size="40" type="text" value="' . $options['vine_url'] . '" />';
	}
	public function gp_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_google_plus" name="contact_options[google_plus_url]" size="40" type="text" value="' . $options['google_plus_url'] . '" />';
	}
	public function pin_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_pinterest" name="contact_options[pinterest_url]" size="40" type="text" value="' . $options['pinterest_url'] . '" />';
	}
	public function gh_field()
	{
		$options = get_option('contact_options');
		echo '<input id="input_github" name="contact_options[github_url]" size="40" type="text" value="' . $options['github_url'] . '" />';
	}

}

?>