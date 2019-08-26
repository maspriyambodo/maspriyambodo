<?php

class M_Default extends CI_Model {

    function Users() {
        $exec = $this->db->select('*')
                ->from('usr_adm')
                ->where('id', $this->session->userdata('id'))
                ->get()
                ->result();
        if ($exec == FALSE) {
            echo '<script>alert("You do not have permission to access");</script>';
            $this->session->sess_destroy();
            redirect('Login', 'refresh');
        } else {
            return $exec;
        }
    }

    function ProjectOffer() {
        $exec = $this->db->select('*')
                ->from('project_offering')
                ->where('read_status', 1)
                ->get();
        return $exec;
    }

}
