<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Portfolio');
    }

    function index() {
        $this->load->view('V_Portfolio');
    }

}
