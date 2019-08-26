<?php

class Forbiden extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('V_Forbiden');
    }

}
