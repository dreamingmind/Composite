<?php
App::uses('AppModel', 'Model');

/**
 * CakePHP Node
 * @author dondrake
 */
class Node extends AppModel  {
	
	public $actsAs = array('SomeTree');
	
	protected $allowedChildren;

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id = false, $table = null, $ds = null);
		
	}
	
	public function allowedChildren($children) {
		$this->allowedChildren = $children;
	}

	public function getAncestors($id) {
		$this->SomeTree->getAncestors($id);
	}

	public function getChildren($id) {
		$this->SomeTree->getChildren($id);
	}

	public function getDescendents($id) {
		$this->SomeTree->getDescendents($id);
	}

	public function getParent($id) {
		$this->SomeTree->getParent($id);
	}

	public function getSelf() {
		
	}

	/**
	 * 
	 * @param mixed $child Object or string
	 * @return boolean
	 */
	public function isAllowedChild($child = NULL) {
		if (is_null($child)) {
			return $this->allowedChildren;
		}
		if (is_string($child)) {
			return in_array($child, $this->allowedChildren);
		}
		if (is_object($child)) {
			foreach ($this->allowedChildren as $class_name) {
				if (is_a($child, $class_name)) {
					return TRUE;
				}
			}
		}
		return FALSE;
	}
	
	public function saveName($data) {
		
	}
	
	public function saveSummary($data) {
		
	}

	public function siblingCount($id) {
		$this->SomeTree->siblingCount();
	}

	public function getSiblings($id) {
		$this->SomeTree->getSiblings($id);
	}
	
	public function childCount($id) {
		$this->SomeTree->childCount($id);
	}

//	public function summary() {
//		return;
//	}
//
//	public function isAllowedParent($parent) {
//		
//	}
//
//	public function name() {
//		return;
//	}
//
//	public function next() {
//		
//	}
//
//	public function previous() {
//		
//	}

}
