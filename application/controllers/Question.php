<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Question extends CI_Controller {
    public function index() {
       $data =  $this->getInput();
        var_dump($data);
    }
    public function haha() {
       echo '12312';
    }
}
