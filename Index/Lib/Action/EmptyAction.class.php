<?php
/**
 * 用于捕获空操作
 * @author zhaoyulee
 *
 */
class EmptyAction extends Action
{

    public function index()
    {
        $this->error("<span style=\"color:red;\">抱歉，暂未开放此功能！</span>");
    }
}
?>