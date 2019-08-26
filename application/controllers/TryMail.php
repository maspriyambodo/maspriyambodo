<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class TryMail extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Mail');
    }

    function index() {
        $this->load->view('V_Mail');
    }

    function KirimPesan() {
        $this->load->library('email');
        $data = array(
            'from' => 'business@maspriyambodo.com',
            'to' => $this->input->post('totxt'),
            'cc' => $this->input->post('cctxt'),
            'bcc' => $this->input->post('bcctxt'),
            'subject' => $this->input->post('subtxt'),
            'msg' => $this->input->post('msgtxt')
        );
        $this->email->from($data['from'], 'MAS PRIYAMBODO');
        $this->email->to($data['to']);
        $this->email->cc($data['cc']);
        $this->email->bcc($data['bcc']);
        $this->email->subject($data['subject']);
        $this->email->message($data['msg']);
        if ($this->email->send()) {
            echo json_encode("STATUS", TRUE);
            exit;
        } else {
            echo json_encode("STATUS", FALSE);
            exit;
        }
    }

}
