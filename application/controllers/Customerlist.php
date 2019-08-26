<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Customerlist extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Default', 'M_Customerlist', 'M_Dashboard'));
        $this->M_Default->Users();
    }

    function index() {
        $data = array(
            'title' => 'Maspriyambodo | Customerlist',
            'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
            'Content' => 'Customerlist',
            'ProjectOffer' => $this->M_Dashboard->Visitors("ProjectOffer"),
            'Customer' => $this->M_Customerlist->Customerlist()
        );
        $this->load->view('DashboardHead', $data);
        $this->load->view('V_Customerlist', $data);
        $this->load->view('DashboardFooter', $data);
    }

    function Simpan() {
        $data = array(
            'url_domain' => $this->input->post('url_domain'),
            'server_name' => $this->input->post('server_name'),
            'ip_addres' => $this->input->post('ip_addres'),
            'str_capacity' => $this->input->post('str_capacity'),
            'addon_domain' => $this->input->post('addon_domain'),
            'sub_domain' => $this->input->post('sub_domain'),
            'email_limit' => $this->input->post('email_limit'),
            'db_limit' => $this->input->post('db_limit'),
            'renewal_fee' => $this->input->post('renewal_fee'),
            'register_date' => $this->input->post('register_date'),
            'due_date' => $this->input->post('due_date')
        );
        $this->M_Customerlist->Simpan($data);
    }

    function Ubah() {
        $data = array(
            'url_domain' => $this->input->post('url_domain'),
            'server_name' => $this->input->post('server_name'),
            'ip_addres' => $this->input->post('ip_addres'),
            'str_capacity' => $this->input->post('str_capacity'),
            'addon_domain' => $this->input->post('addon_domain'),
            'sub_domain' => $this->input->post('sub_domain'),
            'email_limit' => $this->input->post('email_limit'),
            'db_limit' => $this->input->post('db_limit'),
            'renewal_fee' => $this->input->post('renewal_fee'),
            'register_date' => $this->input->post('register_date'),
            'due_date' => $this->input->post('due_date')
        );
        $this->M_Customerlist->Simpan($data);
    }

}
