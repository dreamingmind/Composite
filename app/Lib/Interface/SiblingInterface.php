<?php
/**
 * Description of SiblingInterface
 *
 * @author dondrake
 */
interface SiblingInterface {
	
	public function siblings();
	
	public function siblingCount();
	
	public function next();
	
	public function previous();
	
}
