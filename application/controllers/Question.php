<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Question extends CI_Controller {
    public function index() {
        $userInfo = $_POST['userInfo'];
        $data = $_POST['data'];
        var_dump($userInfo);
        var_dump($data);
    }
    public function haha() {
       echo '12312';
    }
}
