<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of IframePage
 *
 * @author Simon 'Sphere' Erkelens
 */
class IframePage extends Page {
	
	private static $db = array(
		'IframeURL' => 'Varchar(255)',
		'IframeWidth' => 'Int',
		'IframeHeight' => 'Int'
	);

}

class IframePage_Controller extends Page_Controller {
	
}