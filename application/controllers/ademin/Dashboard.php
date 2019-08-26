<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Admin/M_Dashboard');
    }

    function index() {
        if ($this->session->userdata('nama') == "") {
            $this->session->sess_destroy();
            redirect('ademin/Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Maspriyambodo | Dashboard',
                'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design'
            );
            $this->load->view('v_ademin/VDashboard', $data);
        }
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('ademin/Login', 'refresh');
    }

}
