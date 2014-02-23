<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of ContactPage
 *
 * @author Simon 'Sphere' Erkelens
 */
class ContactPage extends Page {
	
	private static $has_many = array(
		'Contacts' => 'Contact',
	);

}

class ContactPage_Controller extends Page_Controller {
	
	private static $allowed_actions = array(
		'ContactForm',
		'HandleForm',
		'Bedankt',
	);
	
	public function ContactForm(){
		$FieldList = FieldList::create(
			array(
				$name = TextField::create('Name', 'Name'),
				$mail = EmailField::create('Email', 'E-mail address'),
				$subj = TextField::create('Subject', 'Subject'),
				LiteralField::create('', '<div class="clearfix"></div>'),
				$area = TextareaField::create('Content', 'Message'),
			)
		);
		$Action = FieldList::create(
			$btn = FormAction::create('HandleForm', 'Versturen')
		);
		$btn->addExtraClass('btn btn-sm btn-default');
		$Required = RequiredFields::create(
			array(
				'Name',
				'Email',
				'Subject',
				'Content',
			)
		);
		$Form = Form::create($this, 'ContactForm', $FieldList, $Action, $Required);
		
		return $Form;
	}
	
	public function HandleForm($data, $form){
		$Contact = Contact::create();
		$form->saveInto($Contact);
		$Contact->write();
		$this->redirect($this->Link('bedankt'));
	}
	
	public function bedankt(){
		return $this;
	}
}

