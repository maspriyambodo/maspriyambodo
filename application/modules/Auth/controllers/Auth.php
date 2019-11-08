<?php

defined('BASEPATH')OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author casug
 */
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Auth');
    }

    function index() {
        if ($this->session->userdata('nama') == "") {
            $data = array(
                'title' => 'LOGIN SYSTEM ADMINISTRATOR'
            );
            $this->load->view('V_Auth', $data);
        } else {
            if ($this->session->userdata('hakakses') == 1) {
                redirect('Admin/Dashboard/index', 'refresh');
            }
        }
    }

    function Process() {
        $data = [
            'uname' => $this->input->post('unametxt', true),
            'pwd' => $this->input->post('pwdtxt', true)
        ];
        $result = $this->M_Auth->Process($data);
        if ($result == true) {
            $session = array('id' => $result[0]->id, 'nama' => $result[0]->uname, 'mail' => $result[0]->usr_mail, 'hakakses' => $result[0]->hak_akses, 'gambar' => $result[0]->pict);
            $this->session->set_userdata($session);
            redirect('Admin/Dashboard/index/', 'refresh');
        } else {
            $data = [
                'title' => 'LOGIN SYSTEM ADMINISTRATOR'
            ];
            $this->session->set_flashdata('message', '<p class="text-center" style="color:#ed4956;">Maaf, username dan password Anda salah. Harap periksa kembali username dan password Anda.</p>');
            $this->load->view('V_Auth', $data);
            //$response = array('message' => '<p class="text-center" id="errmsg" style="display:none;color:#ed4956;">Maaf, username dan password Anda salah. Harap periksa kembali username dan password Anda.</p>');
        }
    }

    function askldl() {
        $data = [
            'formtitle' => 'Change Password',
            'title' => 'Dashboard Administrator'
        ];
        $data['content'] = $this->load->view('V_askldl', $data, true);
        $this->load->view('Template', $data);
    }

    function kljnd() {
        $data = [
            'oldpwd' => $this->input->post('oldpwd', true),
            'newpwd' => $this->input->post('newpwd', true)
        ];
        $this->M_Auth->askldl($data);
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('Auth/index/', 'refresh');
    }

}
