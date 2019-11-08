<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Hosting
 *
 * @author priyambodo
 */
class M_Hosting extends CI_Model {

    function index() {
        $exec = $this->db->select()->from('maspriya_dbpri.tb_hosting')->where('tb_hosting.stat', 1)->get()->result();
        return $exec;
    }

    function Save($data) {
        $this->db->trans_begin();
        $this->db->insert('maspriya_dbpri.tb_hosting', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script>alert("Error while updating data !");window.location.href="' . base_url('Admin/Hosting/index') . '";</script>';
        } else {
            $this->db->trans_commit();
            echo '<script>alert("Sucess updating data !");window.location.href="' . base_url('Admin/Hosting/index') . '";</script>';
        }
    }

    function Getedit($id) {
        $exec = $this->db->select('`tb_hosting`.`id`,`tb_hosting`.`packet_name`,`tb_hosting`.`storage_space`,`tb_hosting`.`unit`,`tb_hosting`.`bandwidth`,`tb_hosting`.`panel`,`tb_hosting`.`price`')
                ->from('maspriya_dbpri.tb_hosting')
                ->where('tb_hosting.id', $id)
                ->get()
                ->result();
        return $exec;
    }

    function Delete($id) {
        $this->db->trans_begin();
        $this->db->set(['tb_hosting.stat' => 2 + false, 'tb_hosting.sysdeleteuser' => $this->session->userdata('id') + false, 'tb_hosting.sysdeletedate' => date("Y-m-d H:i:s")])
                ->where('tb_hosting.id', $id + false)
                ->update('maspriya_dbpri.tb_hosting');
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

}
