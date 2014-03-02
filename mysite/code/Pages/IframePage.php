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
	
	private static $defaults = array(
		'IframeWidth' => '850',
		'IframeHeight' => '1000',
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->push(TextField::create('IframeURL'));
		$fields->push(NumericField::create('IframeWidth'));
		$fields->push(NumericField::create('IframeHeight'));
		return $fields;
	}
}

class IframePage_Controller extends Page_Controller {
	
}