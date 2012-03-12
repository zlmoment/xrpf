<?php
/**
 * 注册类
 * （现不可用，因模板文件未更新）
 * @author zhaoyulee
 *
 */
class SignupAction extends Action
{

    public function index()
    {
        $this->display();
    }
    
    public function signtodb()
    {
    	$User = M("User");
    	$User->create();
    	$result = $User->add();
    	
    	$Group = M("Group");
    	$Group->uid=$result;
    	$result2 = $Group->add();
    	if($result && $result2){
           	$this->assign('jumpUrl','__APP__/public/signin');
            $this->success("操作成功");
      	}else{
           	$this->error("操作失败");
        }
    }
}
?>