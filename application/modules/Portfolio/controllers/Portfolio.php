<?php

defined('BASEPATH')OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Portfolio
 *
 * @author root
 */
class Portfolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Portfolio');
    }

    function index() {
        $this->load->view('V_Portfolio');
    }

}
