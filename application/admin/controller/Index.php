<?php
namespace app\admin\controller;

class Index extends Base
{
	
	/**
	 * 后台首页展示统计信息
	 */
    public function index()
    {
    	$count['order_today'] = '';//今日新增收入
    	$count['users_pay'] = '';//总付费用户
    	$count['users'] = '';//会员总数
    	$count['users_today'] = '';//今日新增用户
		
		$this->assign('count',$count);
        return $this->fetch();
    }

}
