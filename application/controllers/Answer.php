<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use QCloud_WeApp_SDK\Model\Answer as answerModel;

class Answer extends CI_Controller
{
    function create_answer(){
        if (!isset($_POST['pid'])) return $this->outPut(1, '题目信息缺失');
        if (!isset($_POST['openid'])) return $this->outPut(1, '用户信息缺失');
        $data = [];
        $data['openid'] = $_POST['openid'];
        $data['pid'] = $_POST['pid'];
        $data['one'] = isset($_POST['one'])?$_POST['one']:0;
        $data['two'] = isset($_POST['two'])?$_POST['two']:0;
        $data['three'] = isset($_POST['three'])?$_POST['three']:0;
        $data['create_time'] = $_SERVER['REQUEST_TIME'];
        $data['status'] = 1;
       $res =  answerModel::storeAnswer($data);
       if(!$res) $this->outPut(1,'保存数据失败');
       $this->outPut(0,"提交成功");
    }
}
