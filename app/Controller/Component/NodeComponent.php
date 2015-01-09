<?php
App::uses('NodeInterface', 'Lib/Interface');

/**
 * CakePHP NodeComponent
 * @author dondrake
 */
class NodeComponent extends Component implements NodeInterface {

	public $components = array();

	public function initialize($controller) {
		
	}

	public function startup($controller) {
		
	}

	public function beforeRender($controller) {
		
	}

	public function shutDown($controller) {
		
	}

	public function beforeRedirect($controller, $url, $status = null, $exit = true) {
		
	}
	
	public function getSelf() {
		
	}

	public function getAncestors() {
		
	}

	public function getChildren() {
		
	}

	public function getDescendents() {
		
	}

	public function getParent() {
		
	}

	public function isAllowedChild($child) {
		
	}

	public function isAllowedParent($parent) {
		
	}

	public function name() {
		
	}

	public function summary() {
		
	}

}
