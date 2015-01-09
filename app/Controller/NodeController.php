<?php
App::uses('NodeInterface', 'Lib/Interface');
App::uses('AppController', 'Controller');
App::uses('NodeComponent', 'Controller/Component');

/**
 * Description of NodeController
 *
 * @author dondrake
 */
abstract class NodeController extends AppController implements NodeInterface {
	
	public $components = array('Node');

//	protected $parentTypes;
	
	protected $childTypes;
	
	
	public function getSelf($id) {
		$this->Node->getSelf($id);
	}

	public function getAncestors($id) {
		$this->Node->getAncestors($id);
	}

	public function getChildren($id) {
		$this->Node->getChildren($id);
	}

	public function getDescendents($id) {
		$this->Node->getDescendents($id);
	}

	public function getParent($id) {
		$this->Node->getParent($id);
	}

	/**
	 * 
	 * @param mixed $child string or object
	 * @return boolean
	 */
	public function isAllowedChild($child) {
		$this->Node->isAllowedChild($child);
	}

	/**
	 * 
	 * @param mixed $parent string or object
	 * @return boolean
	 */
//	public function isAllowedParent($parent) {
//		return $this->Node->isAllowedParent($parent);		
//	}

//	public function name();
//
//	public function summary();

}
