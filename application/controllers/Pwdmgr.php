<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Pwdmgr extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Pwdmgr');
    }

    function index() {
        if ($this->session->userdata('nama') == "") {
            $this->session->sess_destroy();
            redirect('Dashboard/Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Password Manager',
                'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
                'Content' => 'Pwdmgr',
                'Pwdmgr' => $this->M_Pwdmgr->Pwdmgr(),
                'ProjectOffer' => $this->M_Pwdmgr->ProjectOffer()
            );
            $this->load->view('DashboardHead', $data);
            $this->load->view('V_Pwdmgr', $data);
            $this->load->view('DashboardFooter', $data);
        }
    }

    function Simpanakun() {
        $data = array(
            'id' => '',
            'link' => $this->input->post('link', TRUE),
            'uname' => $this->input->post('uname', TRUE),
            'pwd' => $this->input->post('pwd', TRUE),
            'lastcheck' => date("Y-m-d"),
            'note' => $this->input->post('note', TRUE),
            'status' => 1,
            'syscreatedate' => date("Y-m-d"),
            'syscreateuser' => $this->session->userdata('id')
        );
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
        $data = array(
            'id' => $this->input->post('id', TRUE),
            'link' => $this->input->post('link', TRUE),
            'uname' => $this->input->post('uname', TRUE),
            'pwd' => $this->input->post('pwd', TRUE),
            'lastcheck' => date("Y-m-d"),
            'note' => $this->input->post('note', TRUE),
            'status' => 1,
            'sysupdatedate' => date("Y-m-d"),
            'sysupdateuser' => $this->session->userdata('id')
        );
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
