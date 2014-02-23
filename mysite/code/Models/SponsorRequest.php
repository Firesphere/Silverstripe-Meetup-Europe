<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of SponsorRequest
 *
 * @author Simon 'Sphere' Erkelens
 */
class SponsorRequest extends DataObject
{
	private static $db = array(
		'Title' => 'Varchar(255)',
		'Website' => 'Varchar(255)',
		'Content' => 'HTMLText',
		'URLSegment' => 'Varchar(255)',
		'Priority' => 'Int', // Highest is 1, lowest is 10 I guess
	);
	
	private static $has_one = array(
		'Logo' => 'Image',
		'SponsorPage' => 'SponsorPage',
	);

	public function fieldLabels($includerelations = true) {
		$labels = parent::fieldLabels($includerelations);
		$labels['Title'] = _t('SponsorRequest.Title', 'Company name');
		$labels['Website'] = _t('SponsorRequest.Website', 'Company website');
		$labels['Content'] = _t('SponsorRequest.Content', 'Company description');
		$labels['Logo'] = _t('SponsorRequest.Logo', 'Company logo');
		return $labels;
	}
	
	public function getFrontEndFields($params = null) {
		$fields = parent::getFrontEndFields($params);
		$fields->removeByName(array('URLSegment','Priority','SponsorPageID', 'Content', 'Logo'));
		$fields->push($content = TextareaField::create('Content',_t('SponsorRequest.CONTENT','Description')));
		$fields->push($image = UploadField::create('Logo', _t('SponsorRequest.LOGO','Logo')));
		$image->setConfig('canAttachExisting', false);
		$image->setConfig('allowedMaxFileNumber', 1);
		$image->setConfig('canPreviewFolder', false);
		$image->setConfig('canPreviewFolder', false);
		return $fields;	
	}

}