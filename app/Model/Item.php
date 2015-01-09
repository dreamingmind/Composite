<?php
App::uses('AppModel', 'Model');

/**
 * CakePHP Item
 * @author dondrake
 */
class Item extends AppModel {
	
	public $allowedChildren = array('Artwork');

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->nodeAssociation();
	}
	
}
