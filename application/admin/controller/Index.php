<?php
namespace app\admin\controller;

class Index extends Base
{
    public function index()
    {
        return '<a href="/index.php/admin/login">登录</a>';
    }

}
