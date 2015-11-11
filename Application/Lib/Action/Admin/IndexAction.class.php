<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends PublicAction {
	function _initialize() {
		parent::_initialize ();
	}
	public function index() {
		$this->display ();
	}
	public function set() {
		if ($_SESSION ["cadmin"]) {
			$result = R ( "Api/Api/getsetting" );
			$this->assign ( "info", $result );
			$this->display ();
		}
	}
	public function setting() {
		$result = R ( "Api/Api/setting", array (
				$_POST ["name"],
				$_POST ["notification"] 
		) );
		$this->success ( "修改成功");
	}
}