<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Error_404 extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $data = array(
            'heading' => 'Page not found',
            'message' => "We're sorry, we couldn't find the page you requested."
        );
        $this->load->view('errors/html/error_404', $data);
    }

}
