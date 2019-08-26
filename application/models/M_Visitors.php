<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Visitors extends CI_Model {

    function VisitorView() {
        $exec = $this->db->select('*')
                ->from('user_visitor')
                ->get();
        return $exec->result();
    }

    function ProjectOffer() {
        $exec = $this->db->select('*')
                ->from('project_offering')
                ->where('read_status', 1)
                ->get();
        return $exec;
    }

}
