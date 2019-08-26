<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_Admin/M_Login');
    }

    function index() {
        $data = array(
            'title' => 'Login Administrator',
            'unametxt' => $this->input->post('unametxt'),
            'pwdtxt' => $this->input->post('pwdtxt')
        );
        $this->load->view('v_ademin/VLogin', $this->security->xss_clean($data));
        if ($this->input->post('btnsub')) {
            if ($this->input->post('unametxt') == "" || $this->input->post('pwdtxt') == "") {
                echo '<script>alert("Please complete all field");window.location.href = "' . site_url('ademin/Login') . '";</script>';
            } else {
                $this->Masuk();
            }
        }
    }

    function Masuk() {
        $data = array(
            'uname' => $this->input->post('unametxt'),
            'pwd' => sha1($this->input->post('pwdtxt'))
        );
        $result = $this->M_Login->CheckUser($data);
        if ($result == TRUE) {
            $session = array(
                'title' => 'Dashboard',
                'nama' => $result[0]->uname,
                'mail' => $result[0]->usr_mail
            );
            $this->session->set_userdata($session, 7200);
            redirect('ademin/Dashboard/index', 'refresh');
        } else {
            redirect('ademin/Login', 'refresh');
        }
    }

}
