<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use QCloud_WeApp_SDK\Model\Question as questionModel;

class Question extends CI_Controller
{
    public function index()
    {
        if (!isset($_POST['openid'])) return $this->outPut(1, '用户信息缺失');
        $data = $this->dealData();
        if (!$data) return $this->outPut(1, '数据不完整');
        $data['openid'] = $_POST['openid'];
        $data['type'] = $_POST['type'] ? $_POST['type'] : 1;
        $data['status'] = $_POST['status'] ? $_POST['status'] : 1;
        $data['create_time'] = $_SERVER['REQUEST_TIME'];
        $res = questionModel::storeQuestion($data);
        if (!$res) return $this->outPut(1, '保存数据失败');
        return $this->outPut(0, '创建成功');
    }

    public function dealData()
    {
        $data = [];

        if (isset($_POST['title_one'] , $_POST['one_A'] , $_POST['one_B'] , $_POST['one_C'])) {
            $data['title_one'] = $_POST['title_one'];
            $data['one_A'] = $_POST['one_A'];
            $data['one_B'] = $_POST['one_B'];
            $data['one_C'] = $_POST['one_C'];
        }
        if (isset($_POST['title_two'] , $_POST['two_A'] , $_POST['two_B'] , $_POST['two_C'])) {
            $data['title_two'] = $_POST['title_two'];
            $data['two_A'] = $_POST['two_A'];
            $data['two_B'] = $_POST['two_B'];
            $data['two_C'] = $_POST['two_C'];
        }
        if (isset($_POST['title_three'] , $_POST['three_A'] , $_POST['three_B'] , $_POST['three_C'])) {
            $data['title_three'] = $_POST['title_three'];
            $data['three_A'] = $_POST['three_A'];
            $data['three_B'] = $_POST['three_B'];
            $data['three_C'] = $_POST['three_C'];
        }
        return $data;
    }


    function getQuestion()
    {
        if (!isset($_POST['id'])) return $this->outPut(1, '参数缺失');
        $res = questionModel::findQuestionById($_POST['id']);
        if (!$res) return $this->outPut(1, '没有查询到数据');
        $data = $this->makeData($res);
        return $this->outPut(0, $data);
    }

    private function makeData($res)
    {
        $data['type'] = $res->type;
        $data['id'] = $res->id;
        if ($res->title_one) {
            $data['question']['one'] = [
                'title' => $res->title_one,
                'A' => $res->one_A,
                'B' => $res->one_B,
                'C' => $res->one_C,
            ];
        }
        if ($res->title_two) {
            $data['question']['two'] = [
                'title' => $res->title_two,
                'A' => $res->two_A,
                'B' => $res->two_B,
                'C' => $res->two_C,
            ];
        }
        if ($res->title_three) {
            $data['question']['three'] = [
                'title' => $res->title_three,
                'A' => $res->three_A,
                'B' => $res->three_B,
                'C' => $res->three_C,
            ];
        }
        return $data;
    }

}
