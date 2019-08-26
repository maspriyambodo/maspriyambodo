<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Readprojectoffer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Readprojectoffer');
    }

    function index() {
        $data = array(
            'title' => 'Maspriyambodo | Dashboard',
            'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
            'Content' => 'Home',
            'ProjectOffer' => $this->M_Readprojectoffer->ProjectOffer()
        );
        $this->load->view('DashboardHead', $data);
        $this->load->view('V_Readallproject', $data);
        $this->load->view('DashboardFooter', $data);
    }

    function DetailProject($id) {
        $this->M_Readprojectoffer->Updatestat($id);
        $data = array(
            'title' => 'Maspriyambodo | Dashboard',
            'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
            'Content' => 'Home',
            'ProjectOffer' => $this->M_Readprojectoffer->ProjectOffer(),
            'detail' => $this->M_Readprojectoffer->DetailProject($id)
        );
        $this->load->view('DashboardHead', $data);
        $this->load->view('V_DetailProject', $data);
        $this->load->view('DashboardFooter', $data);
    }

}
