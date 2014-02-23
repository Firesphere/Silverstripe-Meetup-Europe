<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of BecomeSponsorPage
 *
 * @author Simon 'Sphere' Erkelens
 */
class BecomeSponsorPage extends Page
{
	//put your code here

}

class BecomeSponsorPage_Controller extends Page_Controller {
	
	private static $allowed_actions = array(
		'SponsorForm',
		'thankyou',
	);
	
	public function SponsorForm() {
		$spobj = singleton('SponsorRequest');
		$fields = $spobj->getFrontendFields();
		$action = FieldList::create(
			FormAction::create('submitSponsorForm', _t('BecomeSponsorPage.SUBMIT', 'Submit'))
		);
		$required = RequiredFields::create(
			$fields
			);
		$form = Form::create($this, 'SponsorForm', $fields, $action, $required);
		
		return $form;
	}
	
}