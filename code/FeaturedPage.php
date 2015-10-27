<?php
/**
 * A Featured page
 *
 * @package silverstripe-featuredpages
 */
class FeaturedPage extends DataObject {

	private static $db = array(
		'Title' => 'Varchar(200)',
		'Content' => 'Text',
		'FeatureSort' => 'Int'
	);

	private static $has_one = array(
		'FeaturedPage' => 'SiteTree',
		'HolderPage' => 'Page',
		'Thumbnail' => 'Image',
	);

	private static $default_sort = 'FeatureSort';

	public function getCMSFields() {
		$fields = new FieldList();
		$fields->push(new TreeDropdownField("FeaturedPageID", "Choose a page to feature", "SiteTree"));
		$fields->push(new TextField('Title', 'Title'));
		$fields->push(new TextareaField('Content', 'Content'));
		$fields->push(new UploadField('Thumbnail', 'Thumbnail'));
		
		return $fields;		
	}
}
