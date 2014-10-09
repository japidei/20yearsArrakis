<?php
	$g_hostname      = "localhost:3306";
	$g_db_username   = "mantis_6";
	$g_db_password   = "_jC09Z8wyV";
	$g_database_name = "mantis_e";
	$g_db_type       = "mysql";
		#######################################
	# Mantis Database Table Variables
	#######################################

	# --- table prefix ----------------
	$g_db_table_prefix		= '';

	#############################
	# Mantis Email Settings
	#############################

	# --- email variables -------------

	$g_administrator_email	= 'kernelhosting@gmail.com';
	$g_webmaster_email		= 'kernelhosting@gmail.com';

	# the sender email, part of 'From: ' header in emails
 	$g_from_email			= 'kernelhosting@gmail.com';
	
	# the sender name, part of 'From: ' header in emails
	$g_from_name			= 'Mantis Bug Tracker';

	# the return address for bounced mail
	$g_return_path_email	= 'kernelhosting@gmail.com';

	# APS. default upload path
	$g_absolute_path_default_upload_folder = '/var/www/vhosts/xn--20aos-qta.arrakis.es/httpdocs/mantis/upload';

	$g_cookie_path          = '/mantis/';

	$g_cookie_domain        = '20años.arrakis.es';
	
	ini_set( 'date.timezone', 'Asia/Novosibirsk' );
	$g_signup_use_captcha = ON;
	$g_system_font_folder = '/var/www/vhosts/xn--20aos-qta.arrakis.es/httpdocs/mantis';
	$g_font_per_captcha = 'impact.ttf'; 
?>
