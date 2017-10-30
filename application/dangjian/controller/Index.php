<?php
namespace app\dangjian\controller;

use app\dangjian\Model\Index_notice;
use app\dangjian\Model\Index_newsflow;
use think\Controller;


class Index extends Controller
{

    /**
     * 首页
     * 
     * @return mixed|string
     */
    public function main()
    {
        $this->assign([
            "version" => config("version"),
            "noticeList" => $this->loadNotice(),
            "newsflow" => $this->loadNewsflow()
        ]);
        return $this->fetch();
    }
    private function loadNotice(){
        $notice = new Index_notice();
        $noticeList = $notice->field("id,createtime,content")
        ->order("id desc")
        ->select();
        $noticeList = json_encode($noticeList, JSON_UNESCAPED_UNICODE);
        return $noticeList;
    }
    private function loadNewsflow(){
        $newflow = new Index_newsflow();

        return ;
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
