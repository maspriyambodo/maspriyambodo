<?php

defined('BASEPATH')OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author priyambodo
 */
class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Customer');
        $this->result = $this->M_Auth->Check();
    }

    function index() {
        $data = [
            'formtitle' => 'Data Customer',
            'title' => 'Data Customer',
            'value' => $this->M_Customer->index()
        ];
        $data['content'] = $this->load->view('V_Customer', $data, true);
        $this->load->view('Template', $data);
    }

    function Detail($id) {
        $data = [
            'formtitle' => 'Detail Customer',
            'title' => 'Detail Customer',
            'value' => $this->M_Customer->Detail($id)
        ];
        $data['content'] = $this->load->view('V_CustomerDetail', $data, true);
        $this->load->view('Template', $data);
    }

}
