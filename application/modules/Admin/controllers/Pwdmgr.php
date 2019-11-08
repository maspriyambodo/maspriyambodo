<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Pwdmgr extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Pwdmgr');
        $this->result = $this->M_Auth->Check();
    }

    function index() {
        $data = [
            'title' => 'Password Manager',
            'formtitle' => 'Password Manager',
            'Pwdmgr' => $this->M_Pwdmgr->Pwdmgr()
        ];
        $data['content'] = $this->load->view('V_Pwdmgr', $data, true);
        $this->load->view('Template', $data);
    }

    function Simpanakun() {
        $data = [
            'id' => '',
            'link' => $this->input->post('link', TRUE),
            'uname' => $this->input->post('uname', TRUE),
            'pwd' => $this->input->post('pwd', TRUE),
            'lastcheck' => date("Y-m-d"),
            'note' => $this->input->post('note', TRUE),
            'status' => 1,
            'syscreatedate' => date("Y-m-d"),
            'syscreateuser' => $this->session->userdata('id')
        ];
        $stat = $this->M_Pwdmgr->Savepwd($data);
        if ($stat == TRUE) {
            echo json_encode("STATUS", TRUE);
            exit;
        } else {
            echo json_encode("STATUS", FALSE);
            exit;
        }
    }

    function Updateakun() {
        $data = [
            'id' => $this->input->post('id', TRUE),
            'link' => $this->input->post('link', TRUE),
            'uname' => $this->input->post('uname', TRUE),
            'pwd' => $this->input->post('pwd', TRUE),
            'lastcheck' => date("Y-m-d"),
            'note' => $this->input->post('note', TRUE),
            'status' => 1,
            'sysupdatedate' => date("Y-m-d"),
            'sysupdateuser' => $this->session->userdata('id')
        ];
        $stat = $this->M_Pwdmgr->Updatepwd($data);
        if ($stat == TRUE) {
            echo json_encode("STATUS", TRUE);
            exit;
        } else {
            echo json_encode("STATUS", FALSE);
            exit;
        }
    }

    function EditPwd($id) {
        $value = $this->M_Pwdmgr->EditPwd($id);
        echo json_encode($value);
        exit;
    }

    function Detailakun($id) {
        $value = $this->M_Pwdmgr->EditPwd($id);
        echo json_encode($value);
        exit;
    }

    function Delete($id) {
        $this->M_Pwdmgr->Delete($id);
    }

}
