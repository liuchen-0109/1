<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Question extends CI_Controller {
    public function index() {
//       $data =  $this->getInput();
        $data = $_POST;
        var_dump($data->userInfo);
        var_dump($data->title_one);
    }
    public function haha() {
       echo '12312';
    }
}
