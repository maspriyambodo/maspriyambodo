<?php

defined('BASEPATH')OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Error_404
 *
 * @author casug
 */
class Error_404 extends CI_Controller {

    function index() {
        $this->load->view('errors/html/error_404');
    }

}
