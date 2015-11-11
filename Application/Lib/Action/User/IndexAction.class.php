<?php
class IndexAction extends Action {
	function _initialize() {
		$_GET=$this->_get();
		$_POST=$this->_post();
	}
	public function index(){
  	$this->assign('title','首页');
  	$goodsresult=R("Api/Api/getgood");
    $topresult=R("Api/Api/getTop");
    $this->assign("top",$topresult);
	$this->assign("goods",$goodsresult);
    $this->display();
  }
  public function more(){
  	import('ORG.Util.Page');
  	$m=M( "Good" );
  	$count=$m->count();
	$Page = new Page ($count,12);
	$nowPage = isset($_GET['p'])?$_GET['p']:1;
	$list = $m->order('time')->page($nowPage.','.$Page->listRows)->select();
    $show = $Page->show();// 分页显示输出
    $this->ajaxReturn($list);
  }
}