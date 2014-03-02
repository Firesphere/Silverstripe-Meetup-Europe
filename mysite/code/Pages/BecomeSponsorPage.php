<?php
/**
 * Let possible sponsors apply here.
 * 
 * @todo Spamprotection
 *
 * @author Simon 'Sphere' Erkelens
 */
class BecomeSponsorPage extends Page
{
	private static $db = array(
		'ThankyouText' => 'HTMLText',
	);
	
	public function getCMSFields() {
		return parent::getCMSFields();
	}

}

class BecomeSponsorPage_Controller extends Page_Controller {
	
	private static $allowed_actions = array(
		'SponsorForm',
		'thanks',
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
	
	/**
	 * Store the submitted form.
	 * @param Array $data
	 * @param Form $form
	 */
	public function submitSponsorForm($data, $form) {
		/** @var DataObject $submission */
		$submission = SponsorRequest::create();
		$form->saveInto($submission);
		$submission->write();
		return $this->redirect($this->Link('thanks'));
	}
}