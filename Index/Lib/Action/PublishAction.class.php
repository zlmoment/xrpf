<?php
/**
 * 公告类
 * @author zhaoyulee
 *
 */
class PublishAction extends Action
{
	//显示公告列表
    public function index()
    {
    	$News = M("News");
    	$result = $News->order("nid desc")->select();
    	$this->assign("result",$result);
        $this->display();
    }
    //显示公告详情
    public function detail()
    {
    	$nid = $_GET['nid'];
    	$News = M("News");
    	$result = $News->where("nid=$nid")->find();
    	$this->assign("result",$result);
    	$this->display();
    }
}
?>