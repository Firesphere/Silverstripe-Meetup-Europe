<?php
/**
 * Possible sponsors can apply.
 * Their data is stored here.
 *
 * @author Simon 'Sphere' Erkelens
 */
class SponsorRequest extends DataObject
{
	private static $db = array(
		'Title'		=> 'Varchar(255)',
		'Website'	=> 'Varchar(255)',
		'ContactEmail'	=> 'Varchar(255)',
		'Content'	=> 'HTMLText',
	);
	
	private static $has_one = array(
		'Logo'		=> 'Image',
	);

	public function fieldLabels($includerelations = true) {
		$labels = parent::fieldLabels($includerelations);
		$labels['Title']	= _t('SponsorRequest.Title', 'Company name');
		$labels['Website']	= _t('SponsorRequest.Website', 'Company website');
		$labels['ContactEmail']	= _t('SponsorRequest.ContactEmail', 'Company e-mail address');
		$labels['Content']	= _t('SponsorRequest.Content', 'Company description');
		$labels['Logo']		= _t('SponsorRequest.Logo', 'Company logo');
		return $labels;
	}

	public function getFrontEndFields($params = null) {
		$fields = parent::getFrontEndFields($params);
		$fields->removeByName(array('Content', 'Logo'));
		/** @var TextareaField $content */
		$fields->push($content = TextareaField::create('Content',_t('SponsorRequest.Content','Company description')));
		/** @var UploadField $image */
		$fields->push($image = UploadField::create('Logo', _t('SponsorRequest.Logo','Company logo')));
		$image->setConfig('canAttachExisting', false);
		$image->setConfig('allowedMaxFileNumber', 1);
		$image->setConfig('canPreviewFolder', false);
		$image->setConfig('canPreviewFolder', false);
		return $fields;	
	}
	
	public function onBeforeWrite() {
		parent::onBeforeWrite();
	}
	
	public function onAfterWrite() {
		parent::onAfterWrite();
		/** @var Email $mail */
		$mail = Email::create();
		$mail->setTo('info@silverstripe-europe.com');
		$mail->setFrom($this->ContactEmail);
		$mail->setSubject('Sponsor application from '.$this->Title);
		$mail->setTemplate('SponsorApplication');
		$mail->populateTemplate($this);
		$mail->send();
	}

}