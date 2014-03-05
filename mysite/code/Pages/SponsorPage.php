<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of SponsorPage
 *
 * @author Simon 'Sphere' Erkelens
 */
class SponsorPage extends Page
{
	private static $has_many = array(
		'Sponsors' => 'Sponsor',
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
	 
		$gridFieldConfig = GridFieldConfig::create()->addComponents(
			new GridFieldToolbarHeader(),
			new GridFieldAddNewButton('toolbar-header-right'),
			new GridFieldSortableHeader(),
			new GridFieldDataColumns(),
			new GridFieldPaginator(10),
			new GridFieldEditButton(),
			new GridFieldDeleteAction(),
			new GridFieldDetailForm()
		);
	 
		$gridField = new GridField("Sponsors", "Sponsor list:", $this->Sponsors(), $gridFieldConfig);
		$fields->addFieldToTab("Root.Sponsors", $gridField);
	 
		return $fields;
	}
}

class SponsorPage_Controller extends Page_Controller {
	
	private static $allowed_actions = array(
		'details',
	);
	
	public function mySponsors() {
		return $this->Sponsors();
	}
}