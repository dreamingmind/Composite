<?php
App::uses('BrowseInterface', 'Lib/Interface');
App::uses('NodeController', 'Controller');
/**
 * Description of Branch
 *
 * @author dondrake
 */
abstract class BranchNode extends NodeController implements BrowseInterface {
	
	public function view($id) {
		$this->redirect('index');
	}

}
