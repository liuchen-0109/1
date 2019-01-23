<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Question extends CI_Controller {
    public function index() {
//       $data =  $this->getInput();
        var_dump($_POST);
        var_dump($_POST['title_one']);
        var_dump($_POST['userInfo']);
    }
    public function haha() {
       echo '12312';
    }
}
