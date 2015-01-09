<?php
App::uses('BrowseInterface', 'Lib/Interface');
App::uses('NodeController', 'Controller');
/**
 * Description of Leaf
 *
 * @author dondrake
 */
abstract class LeafNode extends NodeController implements BrowseInterface {
	
	public function index() {
		$this->redirect($this->referer());		
	}

}
