<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hosting
 *
 * @author priyambodo
 */
class Hosting extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Hosting');
        $this->result = $this->M_Auth->Check();
    }

    function index() {
        $data = [
            'formtitle' => 'Master Data Hosting',
            'title' => 'Master Data Hosting',
            'value' => $this->M_Hosting->index()
        ];
        $data['content'] = $this->load->view('V_Hosting', $data, true);
        $this->load->view('Template', $data);
    }

    function Save() {
        $data = [
            'tb_hosting.packet_name' => $this->input->post('pktname'),
            'tb_hosting.storage_space' => $this->input->post('strspc'),
            'tb_hosting.unit' => $this->input->post('untstr'),
            'tb_hosting.bandwidth' => $this->input->post('bandwidth'),
            'tb_hosting.panel' => $this->input->post('panel'),
            'tb_hosting.price' => $this->input->post('price'),
            'tb_hosting.syscreateuser' => $this->session->userdata('id'),
            'tb_hosting.syscreatedate' => date("Y-m-d H:i:s"),
            'tb_hosting.stat' => 1
        ];
        $this->M_Hosting->Save($data);
    }

    function Getedit($id) {
        $exec = $this->M_Hosting->Getedit($id);
        if ($exec == []) {
            $response = ['msg' => 'Error while load data !'];
        } else {
            $response = $exec;
        }
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

    function Delete($id) {
        $exec = $this->M_Hosting->Delete($id);
        if ($exec == false) {
            echo '<script>alert("Error while deleting data !");window.location.href="' . base_url('Admin/Hosting/index') . '";</script>';
        } else {
            echo '<script>alert("Success deleting data !");window.location.href="' . base_url('Admin/Hosting/index') . '";</script>';
        }
    }

}
