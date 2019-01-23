<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Question extends CI_Controller {
    public function index() {
        $data = [];
        if($_POST['title_one'] && $_POST['one_A']&& $_POST['one_B']&& $_POST['one_C']){
            $data['title_one'] = $_POST['title_one'];
            $data['one_A'] = $_POST['one_A'];
            $data['one_B'] = $_POST['one_B'];
            $data['one_C'] = $_POST['one_C'];
        }
        var_dump($data);
    }
    public function haha() {
       echo '12312';
    }
}
