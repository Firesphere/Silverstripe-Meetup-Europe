<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of SponsorPage
 *
 * @author Simon 'Sphere' Erkelens
 */
class SponsorPage extends Page
{
	private static $has_many = array(
		'Sponsors' => 'Sponsor',
	);

}

class SponsorPage_Controller extends Page_Controller {
	
	private static $allowed_actions = array(
		'details',
	);
}