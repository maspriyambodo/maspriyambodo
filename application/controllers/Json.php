<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Json extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TryJson');
    }

    function index() {
        $this->load->view('V_Json');
    }

    function SimpanJson() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'mail' => $this->input->post('mail')
        );
        $this->TryJson->Simpan($data);
    }

}
