<?php
/**
 * Adds Featured pages to a page
 *
 * @package silverstripe-featuredpages
 */
class FeaturedPageExtension extends DataExtension {

	private static $db = array(
	);

	private static $has_one = array(
	);

	private static $has_many = array(
		'FeaturedPages' => 'FeaturedPage'
	);
	
	public function updateCMSFields(FieldList $fields) {
        $conf=GridFieldConfig_RecordEditor::create(10);
        $conf->addComponent(new GridFieldSortableRows('FeatureSort'));
        $fields->addFieldToTab('Root.Featured', new GridField('FeaturedPagesID', 'Featured Pages', $this->owner->FeaturedPages(), $conf));

		return $fields;
	}
}
