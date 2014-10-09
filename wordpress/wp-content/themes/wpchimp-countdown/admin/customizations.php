<?php
// Colors section
$customizer->add_setting('wpchimpcs_counter_glow', array(
    'default' => '#85bfee',
    'sanitize_callback' => 'sanitize_hex_color'
));
$customizer->add_control(new WP_Customize_Color_Control($customizer, 'wpchimpcs_counter_glow', array(
    'label' => __('Counter Glow', 'wpchimp-countdown'),
    'section' => 'colors',
    'settings' => 'wpchimpcs_counter_glow',
)));

$customizer->add_setting('wpchimpcs_link_color', array(
    'default' => '#429ce4',
    'sanitize_callback' => 'sanitize_hex_color'
));
$customizer->add_control(new WP_Customize_Color_Control($customizer, 'wpchimpcs_link_color', array(
    'label' => __('Links', 'wpchimp-countdown'),
    'section' => 'colors',
    'settings' => 'wpchimpcs_link_color',
)));

$customizer->add_setting('wpchimpcs_background_color', array(
    'default' => '#FEFEFE',
    'sanitize_callback' => 'sanitize_hex_color'
));
$customizer->add_control(new WP_Customize_Color_Control($customizer, 'wpchimpcs_background_color', array(
    'label' => __('Background', 'wpchimp-countdown'),
    'section' => 'colors',
    'settings' => 'wpchimpcs_background_color',
)));

$customizer->add_setting('wpchimpcs_foreground_color', array(
    'default' => '#4E4E4E',
    'sanitize_callback' => 'sanitize_hex_color'
));
$customizer->add_control(new WP_Customize_Color_Control($customizer, 'wpchimpcs_foreground_color', array(
    'label' => __('Foreground', 'wpchimp-countdown'),
    'section' => 'colors',
    'settings' => 'wpchimpcs_foreground_color',
)));


// Landing page section
$customizer->add_section('wpchimpcs_landing_page', array(
    'title' => __('Landing Page', 'wpchimp-countdown'),
    'priority' => 100,
    'description' => __('Customize the landing page content.', 'wpchimp-countdown')
));

// Headline
$customizer->add_setting('wpchimpcs_headline', array(
    'default' => __('Tell Your Visitors About Your Product', 'wpchimp-countdown'),
    'sanitize_callback' => 'wpchimp_esc'
));
$customizer->add_control(new wpchimpcs_TextboxControl($customizer, 'wpchimpcs_headline', array(
    'label' => __('Headline', 'wpchimp-countdown'),
    'section' => 'wpchimpcs_landing_page',
    'settings' => 'wpchimpcs_headline',
)));

// Description
$customizer->add_setting('wpchimpcs_description', array(
    'default' => __('You can write a short description about your product here', 'wpchimp-countdown'),
    'sanitize_callback' => 'wpchimp_esc'
));
$customizer->add_control(new wpchimpcs_TextboxControl($customizer, 'wpchimpcs_description', array(
    'label' => __('Description', 'wpchimp-countdown'),
    'section' => 'wpchimpcs_landing_page',
    'settings' => 'wpchimpcs_description',
)));

// Release date
$customizer->add_setting('wpchimpcs_release_date', array(
    'default' => date('Y-m-d', strtotime('now +27days')),
    'sanitize_callback' => 'wpchimp_esc'
));
$customizer->add_control(new wpchimpcs_DateControl($customizer, 'wpchimpcs_release_date', array(
    'label' => __('Estimated release date', 'wpchimp-countdown'),
    'section' => 'wpchimpcs_landing_page',
    'settings' => 'wpchimpcs_release_date',
    'type' => 'text'
)));

// Signup form intro
$customizer->add_setting('wpchimpcs_signup_text', array(
    'default' => __('We haven\'t launched yet. Subscribe to our mailing list and we\'ll notify you when we launch.', 'wpchimp-countdown'),
    'sanitize_callback' => 'wpchimp_esc'
));
$customizer->add_control(new wpchimpcs_TextboxControl($customizer, 'wpchimpcs_signup_text', array(
    'label' => __('Signup form text', 'wpchimp-countdown'),
    'section' => 'wpchimpcs_landing_page',
    'settings' => 'wpchimpcs_signup_text',
)));

// Signup form
if(function_exists('wpchimp_form')) {
    $customizer->add_setting('wpchimpcs_form_name', array(
        'sanitize_callback' => 'wpchimp_esc'
    ));
    $customizer->add_control(new wpchimpcs_FormChooser($customizer, 'wpchimpcs_form_name', array(
        'label' => __('Signup form', 'wpchimp-countdown'),
        'section' => 'wpchimpcs_landing_page',
        'settings' => 'wpchimpcs_form_name',
    )));
} else {
    $customizer->add_setting('wpchimpcs_form_html', array(
        'default' => '<!-- customize this form -->
<form action="" method="post" class="form-inline" target="_blank">
<div class="form-group">
    <input type="email" value="" name="EMAIL" required class="form-control" placeholder="Email address">
</div>
<input type="submit" value="Subscribe" name="subscribe" class="btn btn-default">
</form>',
        'sanitize_callback' => 'wpchimp_esc_html_form'
    ));
    $customizer->add_control(new wpchimpcs_FormHtml($customizer, 'wpchimpcs_form_html', array(
        'label' => __('Signup form HTML', 'wpchimp-countdown'),
        'section' => 'wpchimpcs_landing_page',
        'settings' => 'wpchimpcs_form_html',
    )));
}
