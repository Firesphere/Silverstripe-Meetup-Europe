<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$host = filter_input(INPUT_SERVER, 'HTTP_HOST');

/** This is Simon @SphereSilver's localhost */
if($host == 'silverstripe-europe.vcap.me') {
	$database = 'ss_europe';
	Director::set_environment_type('dev');
}
else {
	$database = 'live_europe';
	SS_Log::add_writer(new SS_LogEmailWriter('simon@casa-laguna.net'), SS_Log::WARN, '<=');
}
require_once('conf/ConfigureFromEnv.php');
date_default_timezone_set('Europe/Amsterdam');
// Set the site locale
i18n::set_locale('en_US');