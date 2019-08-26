<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Test');
    }

    function index() {
        $this->load->view('vTest');
    }

    function CheckUser() {
        $data = array(
            'uname' => $this->input->post('uname'),
            'pwd' => sha1($this->input->post('pword'))
        );
        $this->M_Test->CheckUser($data);
    }

}
