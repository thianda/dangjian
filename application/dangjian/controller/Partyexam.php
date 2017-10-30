<?php
namespace app\dangjian\controller;

class Partyexam extends Common
{

    public function _initialize()
    {
        parent::_initialize();
        // 展示所在支部的6号资料信息
        // return dump(session("cuser"));
    }

    function index()
    {
        return dump(input('a'));
    }

    /**
     * 上传标准
     */
    public function uploadStandard()
    {
        // 1.获取上传数据
        // $standards = input('param.standard');
        $standards = "a]b]c]d]e[1]2]3]4]5";
        
        $jsonstr = '{"a":1,"b":2,"c":3}';
        $json = json_decode($jsonstr);
        return dump($json);
        // 2.整理为数据表的格式。
        // 3.保存到数据库
    }

    private function aa()
    {}

    /**
     * 删除分项资料
     */
    public function deleteFiles()
    {
        // 1. 获取分项id，删除文件
    }

    /**
     * 上传分项资料
     */
    public function uploadFiles()
    {
        // 1. 获取用户信息，分项id，若有文件先删除
        // 2. 获取上传文件并重命名保存，获取保存路径
        // 3. 修改分项状态
        // 4. 判断是否全部上传完毕,若是则修改流程表状态
    }

    /**
     * 指定审核人
     */
    public function assignCheckPerson()
    {
        // 1. 获取流程id、审核人
        //
    }

    /**
     * 审核+打初评分
     */
    public function firstMarking()
    {
        // 1. 审核并打分
        // 2. 或驳回到uploadFiles
    }

    /**
     * 终于评分
     */
    public function lastMarking()
    {
        // 1. 审核并打分
        // 2. 或驳回到uploadFiles
    }

    private function changeStatus($exam_ids = [], $status = null)
    {
        // 1. 获取需要修改的标准ids，以及修改后的状态
        // 2. 校验并判断，是否修改流程的状态
    }
}