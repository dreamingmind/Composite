<?php
/**
 * Description of Node
 *
 * @author dondrake
 */
interface NodeInterface {
	
	public function getSelf();
	
	public function getParent();
	
	public function getChildren();
	
	public function getAncestors();
	
	public function getDescendents();
	
	/**
	 * 
	 * @param mixed $parent string or object
	 * @return boolean
	 */
//	public function isAllowedParent($parent);
	
	/**
	 * 
	 * @param mixed $child string or object
	 * @return boolean
	 */
	public function isAllowedChild($child);
	
	public function name();
	
	public function summary();
	
}
