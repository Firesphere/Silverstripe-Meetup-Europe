<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Contact
 *
 * @author Simon 'Sphere' Erkelens
 */
class Contact extends DataObject {
	
	private static $db = array(
		'Name' => 'Varchar(255)',
		'Email' => 'Varchar(255)',
		'Subject' => 'Varchar(255)',
		'Content' => 'Text',
		'IsSpam' => 'Boolean(false)',
	);
	
	private static $has_one = array(
		'ContactPage' => 'ContactPage',
	);
	
	public function onBeforeWrite(){
		parent::onBeforeWrite();
		$this->ContactPageID = ContactPage::get()->first()->ID;
		try {
			$akismet = new Akismet(Director::absoluteBaseURL(), 'd17644d44a8d');
			$akismet->setCommentAuthor($this->Name);
			$akismet->setCommentContent($this->Content);
			$akismet->setCommentAuthorEmail($this->Email);
			$result = (int)$akismet->isCommentSpam();
			if($result){
				$this->IsSpam = true;
			}

		} catch (Exception $e) {
			$this->IsSpam = false;
		}	
	}

	public function onAfterWrite(){
		if(!$this->IsSpam){
			$mail = Email::create();
			$mail->setTo('info@filmsvandaag.nl');
			$mail->setSubject('Nieuw contactformulier ingevuld: ' . $this->Subject);
			$mail->setFrom($this->Email);
			$mail->setTemplate('ContactFormPost');
			$mail->populateTemplate($this);
			$mail->send();
		}
		else{
			$this->delete();
		}
	}
}
