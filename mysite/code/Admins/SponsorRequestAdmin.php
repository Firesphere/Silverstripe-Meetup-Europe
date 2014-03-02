<?php
/**
 * Manage sponsor-requests
 *
 * @author Simon 'Sphere' Erkelens
 */
class SponsorRequestAdmin extends ModelAdmin
{
	private static $managed_models = array(
		'SponsorRequest',
	);
	
	private static $url_segment = 'sponsorrequest';
	
	private static $menu_title = 'Sponsor Requests';

}