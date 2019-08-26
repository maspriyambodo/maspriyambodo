<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Local extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Local');
    }

    function project_offering() {
        $this->M_Local->project_offering();
    }

    function uname_pwd() {
        $this->M_Local->uname_pwd();
    }

    function user_visitor() {
        $this->M_Local->user_visitor();
    }

    function usr_adm() {
        $this->M_Local->usr_adm();
    }

}
