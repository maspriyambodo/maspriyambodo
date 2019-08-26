<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Mail extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Mail');
    }

    function index() {
        if ($this->session->userdata('nama') == "") {
            $this->session->sess_destroy();
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Maspriyambodo | Mail Compose',
                'metadesc' => 'maspriyambodo, Website Business, Portfolio, Agency, Photography, eCommerce, Freelance, Web Design, Web Developer, HTML5, CSS3, performance evaluation, Web Programming, Design',
                'Content' => 'Mail',
                'ProjectOffer' => $this->M_Mail->ProjectOffer()
            );
            $this->load->view('DashboardHead', $data);
            $this->load->view('V_Mail', $data);
            $this->load->view('DashboardFooter', $data);
        }
    }

    function Inbox() {
        
    }

    function Sent() {
        echo 'sent';
    }

    function Sending() {
        $data = array(
            'from' => $this->input->post('fromtxt'),
            'to' => $this->input->post('totxt'),
            'cc' => $this->input->post('cctxt'),
            'bcc' => $this->input->post('bcctxt'),
            'subject' => $this->input->post('subtxt'),
            'msg' => $this->input->post('msgtxt')
        );
        $this->load->library('email');
        $this->email->from($data['from'], $this->session->userdata('nama'));
        $this->email->to($data['to']);
        $this->email->cc($data['cc']);
        $this->email->bcc($data['bcc']);
        $this->email->subject($data['subject']);
        $this->email->message($data['msg']);
        if ($this->email->send()) {
            $ses = array('status' => 'ok', 'msg' => $this->email->print_debugger());
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($ses, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $ses = array('status' => 'error', 'msg' => $this->email->print_debugger());
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($ses, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

}
