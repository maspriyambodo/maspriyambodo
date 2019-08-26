<?php

class Settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Settings', 'M_Default'));
        $this->M_Default->Users();
    }

    function index() {
        $data = array(
            'title' => 'Maspriyambodo | Settings',
            'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
            'Content' => 'Settings',
            'ProjectOffer' => $this->M_Default->ProjectOffer()
        );
        $this->load->view('DashboardHead', $data);
        $this->load->view('V_Settings', $data);
        $this->load->view('DashboardFooter', $data);
    }

}
