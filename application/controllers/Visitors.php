<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Visitors extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Visitors');
    }

    function index() {
        if ($this->session->userdata('nama') == "") {
            $this->session->sess_destroy();
            redirect('Dashboard/Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Maspriyambodo | Visitors',
                'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
                'Content'=>'Visitors',
                'VisitorView' => $this->M_Visitors->VisitorView(),
                'ProjectOffer' => $this->M_Visitors->ProjectOffer(),
            );
            $this->load->view('DashboardHead', $data);
            $this->load->view('V_Visitors', $data);
            $this->load->view('DashboardFooter', $data);
        }
    }

}
