<?php
class DetailAction extends Action {
	function _initialize() {
		$_GET = $this->_get();
		$_POST = $this->_post();
	}
	function show_back_ico() {
		$back_html = '<i class="ui-icon-return" onclick="history.back()"></i>';
		$this->assign('back_html', $back_html);
	}
	public function index() {
		$this->show_back_ico();
		$goodsresult = R("Api/Api/getgooddetail", array(
			$_GET["id"],
		));
		$this->assign("title", "详细信息");
		$this->assign("good", $goodsresult);
		$this->display();

	}
}