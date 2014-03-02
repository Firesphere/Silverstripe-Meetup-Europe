<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Sponsors
 *
 * @author Simon 'Sphere' Erkelens
 */
class Sponsor extends DataObject
{
	private static $db = array(
		'Title'		=> 'Varchar(255)',
		'Website'	=> 'Varchar(255)',
		'ContactEmail'	=> 'Varchar(255)',
		'Content'	=> 'HTMLText',
		'URLSegment'	=> 'Varchar(255)',
		'Priority'	=> 'Int', // Highest is 1, lowest is 10 I guess
	);
	
	private static $has_one = array(
		'Logo'		=> 'Image',
		'SponsorPage'	=> 'SponsorPage',
	);
	
	private static $indexes = array(
		'URLSegment' => true
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

	public function onBeforeWrite() {
		parent::onBeforeWrite();
		if (!$this->URLSegment || ($this->isChanged('Title') && !$this->isChanged('URLSegment'))){
			$this->URLSegment = singleton('SiteTree')->generateURLSegment($this->Title);
			if(strpos($this->URLSegment, 'page-') === false){
				$nr = 1;
				while($this->LookForExistingURLSegment($this->URLSegment)){
					$this->URLSegment .= '-'.$nr++;
				}
			}
		}
	}
	
	/**
	 * test whether the URLSegment exists already on another Newsitem
	 * @return boolean URLSegment already exists yes or no.
	 */
	public function LookForExistingURLSegment($URLSegment) {
		return(Sponsor::get()
			->filter(
				array("URLSegment" => $URLSegment)
			)
			->exclude(
				array("ID" => $this->ID)
			)
			->count() != 0);
	}
}