<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Dashboard');
    }

    function index() {
        $data = array(
            'title' => 'Login Administrator',
            'msgbox' => 0,
            'unametxt' => $this->input->post('unametxt'),
            'pwdtxt' => $this->input->post('pwdtxt')
        );
        //$this->TrackVisitor();
        $this->load->view('V_Login', $this->security->xss_clean($data));
    }

    private function TrackVisitor() {
        $loc = file_get_contents('https://ipapi.co/' . $this->input->ip_address() . '/json/');
        $data = json_decode($loc);
        $save = array('id' => '', 'page' => 1, 'user_ip_address' => $this->input->ip_address(), 'user_isp' => $data->org, 'long_lat' => $data->latitude . ', ' . $data->longitude, 'user_city' => $data->city, 'user_region' => $data->region, 'user_country' => $data->country, 'user_country_name' => $data->country_name, 'country_calling_code' => $data->country_calling_code, 'user_currency' => $data->currency, 'device_system' => $this->agent->agent_string(), 'tgl' => date('Y-m-d H:i:s', time()));
        $this->M_Dashboard->Save_Visitor($save);
    }

    function Masuk() {
        $data = array('uname' => $this->input->post('unametxt', TRUE), 'pwd' => $this->input->post('pwdtxt', TRUE));
        $this->M_Dashboard->CheckUser($data);
    }

}
