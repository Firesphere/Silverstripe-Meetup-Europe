<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of PersonPage
 *
 * @author Simon 'Sphere' Erkelens
 */
class PersonPage extends Page
{
	
	private static $has_many = array(
		'Persons' => 'Person',
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
	 
		$gridField = new GridField("Persons", "Person list:", $this->Persons(), $gridFieldConfig);
		$fields->addFieldToTab("Root.Persons", $gridField);
	 
		return $fields;
	}

}

class PersonPage_Controller extends Page_Controller {
	
	private static $allowed_actions = array(
		'details'
	);
}