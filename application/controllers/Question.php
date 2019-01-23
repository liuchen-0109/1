<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Question extends CI_Controller
{
    public function index()
    {
        $data = $this->dealData();
        if(!$data) return json_encode(['code'=>1,'msg'=>'数据不完整']);
        if(!$_POST['openid']) return json_encode(['code'=>1,'msg'=>'用户信息缺失']);
        var_dump($data);
    }

    public function dealData()
    {
        $data = [];
        if ($_POST['title_one'] && $_POST['one_A'] && $_POST['one_B'] && $_POST['one_C']) {
            $data['title_one'] = $_POST['title_one'];
            $data['one_A'] = $_POST['one_A'];
            $data['one_B'] = $_POST['one_B'];
            $data['one_C'] = $_POST['one_C'];
        }
        if ($_POST['title_two'] && $_POST['two_A'] && $_POST['two_B'] && $_POST['two_C']) {
            $data['title_two'] = $_POST['title_two'];
            $data['two_A'] = $_POST['two_A'];
            $data['two_B'] = $_POST['two_B'];
            $data['two_C'] = $_POST['two_C'];
        }
        if ($_POST['title_three'] && $_POST['three_A'] && $_POST['three_B'] && $_POST['three_C']) {
            $data['title_three'] = $_POST['title_three'];
            $data['three_A'] = $_POST['three_A'];
            $data['three_B'] = $_POST['three_B'];
            $data['three_C'] = $_POST['three_C'];
        }
        return $data;
    }


}
