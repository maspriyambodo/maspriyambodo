<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class M_Readprojectoffer extends CI_Model {

    function DetailProject($id) {
        $exec = $this->db->select('*')
                ->from('project_offering')
                ->where('id', $id)
                ->get();
        return $exec;
    }

    function ProjectOffer() {
        $exec = $this->db->select('*')
                ->from('project_offering')
                ->where('read_status', 1)
                ->get();
        return $exec;
    }

    function Updatestat($id) {
        $this->db->set('read_status', 2, FALSE);
        $this->db->where('id', $id);
        $this->db->update('project_offering');
    }

}
