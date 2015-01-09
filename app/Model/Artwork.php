<?php
App::uses('AppModel', 'Model');

/**
 * CakePHP Item
 * @author dondrake
 */
class Artwork extends AppModel {
	
	public $allowedChildren = FALSE;

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->nodeAssociation();
	}
	
}
