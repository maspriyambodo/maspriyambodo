<?php

class Tryreactjs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Dashboard'));
    }

    function index() {
        $data = array(
            'title' => 'Maspriyambodo | Customerlist',
            'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
            'Content' => 'Customerlist',
            'ProjectOffer' => $this->M_Dashboard->Visitors("ProjectOffer")
        );
        $this->load->view('DashboardHead', $data);
        $this->load->view('V_Tryreactjs', $data);
        $this->load->view('DashboardFooter', $data);
    }

}
