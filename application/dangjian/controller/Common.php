<?php
namespace app\dangjian\controller;

use think\Controller;

class Common extends Controller
{

    public function _initialize()
    {
        // 识别用户身份
        $cuser = 'dasd';
        session("cuser",$cuser);
    }

    public function index()
    {
        return $this->redirect("main");
    }

    /**
     * 首页
     *
     * @return mixed|string
     */
    public function main()
    {
        return $this->fetch();
    }

    public function _empty()
    {
        $dir = APP_PATH . request()->module() . DS . "view" . DS . request()->controller() . DS . request()->action() . "." . config('template.view_suffix');
        if (file_exists($dir))
            return $this->fetch(request()->action());
        else {
            return $this->error("请求未找到(╯﹏╰)", null, null, 60);
        }
    }
}