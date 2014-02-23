<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Person
 *
 * @author Simon 'Sphere' Erkelens
 */
class Person extends DataObject
{
	private static $db = array(
		'Name' => 'Varchar(255)',
		'Email' => 'Varchar(255)',
		'Biography' => 'HTMLText',
		'Country' => 'Varchar(3)',
		'Employer' => 'Varchar(255)',
		'URL' => 'Varchar(255)',
		'URLSegment' => 'Varchar(255)',
	);
	
	private static $has_one = array(
		'Mugshot' => 'Image',
		'Employ' => 'Sponsor',
		'PersonPage' => 'PersonPage'
	);
	
	private static $indexes = array(
		'URLSegment' => true
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Main', CountryDropdownField::create('Country', _t('Person.Country','Country')));
		return $fields;
	}

	public function onBeforeWrite() {
		parent::onBeforeWrite();
		if (!$this->URLSegment || ($this->isChanged('Name') && !$this->isChanged('URLSegment'))){
			$this->URLSegment = singleton('SiteTree')->generateURLSegment($this->Name);
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
		return(Person::get()
			->filter(
				array("URLSegment" => $URLSegment)
			)
			->exclude(
				array("ID" => $this->ID)
			)
			->count() != 0);
	}
}