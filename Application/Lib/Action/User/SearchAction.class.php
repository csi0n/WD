<?php
class SearchAction extends Action {
	function _initialize() {
		$_GET=$this->_get();
		$_POST=$this->_post();
	}
	public function index(){
    $this->display();
  }
}