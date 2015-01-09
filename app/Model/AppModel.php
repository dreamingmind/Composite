<?php
App::uses('Model', 'Model');

/**
 * CakePHP AppModel
 * @author dondrake
 */
class AppModel extends Model {
	
	public $useTable = FALSE;
	
	/**
	 * Associate Artwork on two keys, location_id and item_id
	 * 
	 * @param string $item_id
	 */
	public function nodeAssociation() {
		$this->bindModel(array('hasOne' => array(
		'Node' => array(
			'className' => 'Node',
			'foreignKey' => 'foreign_id',
			'conditions' => array("Node.foreign_model = $this->alias"),
			'fields' => '',
			'order' => ''
		))));
		$this->Node->setAllowedChildren($this->allowedChildren);
	}

}
