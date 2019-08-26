<?php

class Backupdb extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Dashboard', 'M_Backupdb'));
    }

    function index() {
        $data = array(
            'title' => 'Maspriyambodo | Backup',
            'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
            'Content' => 'Customerlist',
            'ProjectOffer' => $this->M_Dashboard->Visitors("ProjectOffer"),
            'dbtable' => $this->M_Backupdb->index()
        );
        $this->load->view('DashboardHead', $data);
        $this->load->view('V_Backupdb', $data);
        $this->load->view('DashboardFooter', $data);
    }

}
