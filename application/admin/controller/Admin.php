<?php
namespace app\admin\controller;


class Admin extends Base
{
	
	/**
	 * 管理员列表
	 */
	public function index()
	{
		return $this->fetch();
	}
	/**
	 * 管理员信息
	 */
	public function info()
	{
		return $this->fetch();
	}
	
	/**
	 * 增改删管理员
	 */
	public function handle()
	{
		$data = input('post.');
		
		if(empty($data['password'])){
			unset($data['password']);
		}else{
			$data['password'] = encrypt($data['password']);//TODO:此处要增加 encrypt 加密函数
		}
		
		if($data['act']=='add'){
			
		}
		
		if($data['act']=='edit'){
			
		}
		
		if($data['del']=='del' && $data['admin_id']>1){//不能删除超级管理员
			
		}
	}
	
	//管理员登录
    public function login()
    {
    	//判断是否登录，如果已经登录转到后台首页
    	
    	//判断是提交登录判断
    	if (request()->isPost())
    	{
    		$username = input('post.username');
    		$password = input('post.password');
    		$safecode = input('post.safecode');
    		$captcha = input('post.captcha');
    		//验证码是否正确
    		if(!captcha_check($captcha)){
    			echo '验证码错误';
    		}
    		//安全码是否正确
    		if($safecode!=$this->safe_code()){
    			echo '安全码错误';
    		}
    		//用户名和密码是否正确
			
    	}
        return $this->fetch();
    }
	
	/**
	 * 退出登录
	 */
	public function logout()
	{
		
	}
	

	public function safe_code(){
		//获取当前的月日
		$d = intval(date('d'));
		$e = $d+10;
		//安全码加密
		$code = $d.$e;
		return $code;
		
	}
	
	
}
