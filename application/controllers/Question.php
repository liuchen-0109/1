<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Question extends CI_Controller {
    public function index() {
        $input = file_get_contents('php://input');
        var_dump($input);exit;
        $userInfo = $_POST['userInfo'];
        $data = $_POST['data'];
        var_dump($userInfo);
        var_dump($data);
    }
    public function haha() {
       echo '12312';
    }
}
