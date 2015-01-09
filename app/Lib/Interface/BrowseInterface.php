<?php
/**
 * Description of BrowseInterface
 *
 * @author dondrake
 */
interface BrowseInterface {

	public function index();
	
	public function view($id);
	
	public function search($value);
	
}
