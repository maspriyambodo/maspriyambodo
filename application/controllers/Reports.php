<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Reports extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Report');
    }

    function Daily() {
        if ($this->session->userdata('nama') == "") {
            $this->session->sess_destroy();
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Maspriyambodo | Daily',
                'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
                'Content' => 'Daily',
                'ProjectOffer' => $this->M_Report->ProjectOffer(),
                'Today' => $this->M_Report->Daily()
            );
            $this->load->view('DashboardHead', $data);
            $this->load->view('V_Daily', $data);
            $this->load->view('DashboardFooter', $data);
        }
    }

    function Monthly() {
        if ($this->session->userdata('nama') == "") {
            $this->session->sess_destroy();
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Maspriyambodo | Monthly',
                'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
                'Content' => 'Monthly',
                'ProjectOffer' => $this->M_Report->ProjectOffer(),
                'Monthly' => $this->M_Report->Monthly()
            );
            $this->load->view('DashboardHead', $data);
            $this->load->view('V_Monthly', $data);
            $this->load->view('DashboardFooter', $data);
        }
    }

}
