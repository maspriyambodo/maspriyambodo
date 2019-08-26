<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Profiles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Profile');
    }

    function index() {
        if ($this->session->userdata('nama') == "") {
            $this->session->sess_destroy();
            redirect('Login', 'refresh');
        } else {

            $data = array(
                'title' => 'Maspriyambodo | Dashboard',
                'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
                'Content' => 'Profile',
                'Users' => $this->M_Profile->Users(),
                'ProjectOffer' => $this->M_Profile->ProjectOffer(),
                'Portfolio' => $this->M_Profile->Portfolio()
            );
            $this->load->view('DashboardHead', $data);
            $this->load->view('V_Profile', $data);
            $this->load->view('DashboardFooter', $data);
        }
    }

    function Simpan($id) {
        $data = array(
            'id' => $id,
            'uname' => $this->input->post('uname', TRUE),
            'pwd' => sha1($this->input->post('pwd', TRUE)),
            'usr_mail' => $this->input->post('usr_mail', TRUE),
        );
        $this->M_Profile->Simpan($data);
    }

}
