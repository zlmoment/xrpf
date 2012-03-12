<?php
/**
 * 提交报告类
 * @author zhaoyulee
 *
 */
class HandinAction extends BaseAction
{
	
	public function index()
	{
	}
	//立项表
    public function step1()
    {
    	$User = M("User");
    	$stuno = Session::get(C('USER_AUTH_KEY'));
    	$result = $User->where("stuno=$stuno")->find();
    	
		$Group = M("Group");
		$uid=$result["uid"];
		$gresult = $Group->where("uid=$uid")->find();
		
		$Protable = M("Protable");
		$presult = $Protable->where("uid=$uid")->find();
		
		if($result['grouptype']==1)
		{
			if($gresult['u1_name']=="" && $gresult['u1_name']=="")
			{
				$this->assign('jumpUrl','__APP__/group/index');
            	$this->error("<p style=\"color:red;\">您还没有完善组员信息！请完善后再提交立项表！</p>");
			}
			else
			{
				$this->assign("presult",$presult);
				$this->assign("result",$result);
    			$this->assign("gresult",$gresult);
        		$this->display();
        	}
		}
		else
		{
			$this->assign("presult",$presult);
			$this->assign("result",$result);
    		$this->assign("gresult",$gresult);
        	$this->display();
		}
    	
    }
    public function step1_do()
    {
    	$Protable = M("Protable");
    	$uid = $_POST['uid']; 
    	if ($_POST['proname']=="" || $_POST['prodetail']=="" || $_POST['protech']=="" || $_POST['proforward']=="")
    	{
    		$this->error("所有表格项都需要填写内容，请重新检查！");
    	}
    	
    	if ($Protable->where("uid=$uid")->find())
    	{
    		$id = $Protable->where("uid=$uid")->getField('id');
    		$Protable2 = M("Protable");
    		$Protable2->uid = $_POST['uid'];
    		$Protable2->gid = $_POST['gid'];
    		$Protable2->proname = $_POST['proname'];
    		$Protable2->prodetail = $_POST['prodetail'];
    		$Protable2->protech = $_POST['protech'];
    		$Protable2->proforward = $_POST['proforward'];
    		$Protable2->type = $_POST['type'];
    		$Protable2->id = $id;
    		$result = $Protable2->save();
    	}
    	else{
    		$Protable->uid = $_POST['uid'];
	    	$Protable->gid = $_POST['gid'];
	    	$Protable->proname = $_POST['proname'];
	    	$Protable->prodetail = $_POST['prodetail'];
	    	$Protable->protech = $_POST['protech'];
	    	$Protable->proforward = $_POST['proforward'];
	    	$Protable->type = $_POST['type'];
    		$result = $Protable->add();
    	}
    	
    	if($result){
           	$this->assign('jumpUrl','__APP__/handin/step1');
            $this->success("操作成功");
      	}else{
           	$this->error("操作失败，或您没有更新数据！");
        }
    }
    //中期报告
    public function step2()
    {
    	$User = M("User");
    	$stuno = Session::get(C('USER_AUTH_KEY'));
    	$result = $User->where("stuno=$stuno")->find();
    
    	$Group = M("Group");
    	$uid=$result["uid"];
    	$gresult = $Group->where("uid=$uid")->find();
    
    	$Protable = M("Protable");
    	$presult = $Protable->where("uid=$uid")->find();
    	
    	$Midtable = M("Midtable");
    	$mresult = $Midtable->where("uid=$uid")->find();
    
    	if($presult['proname']==""||$presult==false)
    	{
    		$this->assign('jumpUrl','__APP__/handin/step1');
    		$this->error("<p style=\"color:red;\">你还没有提交立项表！请先提交立项表！</p>");
    	}
    	else
    	{
    		$this->assign("presult",$presult);
    		$this->assign("result",$result);
    		$this->assign("gresult",$gresult);
    		$this->assign("mresult",$mresult);
    		$this->display();
    	}
    
    }
    public function step2_do()
    {
    	$Midtable = M("Midtable");
    	$uid = $_POST['uid'];
    	if ($_POST['prodetail']=="" || $_POST['protech']=="" || $_POST['proforward']=="" || $_POST['prodiff']=="" || $_POST['proteamwork']=="" || $_POST['profunc']=="")
    	{
    		$this->error("所有表格项都需要填写内容，请重新检查！");
    	}
    
    	if ($Midtable->where("uid=$uid")->find())
    	{
    		$id = $Midtable->where("uid=$uid")->getField('id');
    		$Midtable2 = M("Midtable");
    		$Midtable2->uid = $_POST['uid'];
    		$Midtable2->gid = $_POST['gid'];
    		$Midtable2->proname = $_POST['proname'];
    		$Midtable2->prodetail = $_POST['prodetail'];
    		$Midtable2->protech = $_POST['protech'];
    		$Midtable2->proforward = $_POST['proforward'];
    		$Midtable2->prodiff = $_POST['prodiff'];
    		$Midtable2->profunc = $_POST['profunc'];
    		$Midtable2->proteamwork = $_POST['proteamwork'];
    		$Midtable2->type = $_POST['type'];
    		$Midtable2->id = $id;
    		$result = $Midtable2->save();
    	}
    	else{
    		$Midtable->uid = $_POST['uid'];
    		$Midtable->gid = $_POST['gid'];
    		$Midtable->proname = $_POST['proname'];
    		$Midtable->prodetail = $_POST['prodetail'];
    		$Midtable->protech = $_POST['protech'];
    		$Midtable->proforward = $_POST['proforward'];
    		$Midtable->prodiff = $_POST['prodiff'];
    		$Midtable->profunc = $_POST['profunc'];
    		$Midtable->proteamwork = $_POST['proteamwork'];
    		$Midtable->type = $_POST['type'];
    		$result = $Midtable->add();
    	}
    
    	if($result){
    		$this->assign('jumpUrl','__APP__/handin/step2');
    		$this->success("操作成功");
    	}else{
    		$this->error("操作失败，或您没有更新数据！");
    	}
    }
    
    public function step3()
    {
    	$this->error("<span style=\"color:red;\">抱歉，暂未开放此功能！</span>");
    }
    public function finalproject()
    {
    	$this->error("<span style=\"color:red;\">抱歉，暂未开放此功能！</span>");
    }
}
?>