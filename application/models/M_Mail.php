<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Mail extends CI_Model {

    function ProjectOffer() {
        $exec = $this->db->select('*')
                ->from('project_offering')
                ->where('read_status', 1)
                ->get();
        return $exec;
    }

}
