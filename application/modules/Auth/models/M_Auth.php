<?php

defined('BASEPATH')OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Auth
 *
 * @author casug
 */
class M_Auth extends CI_Model {

    function Check() {
        $exec = $this->db->select()
                ->from('usr_adm')
                ->where([
                    'usr_adm.id' => $this->session->userdata('id'),
                    'usr_adm.uname' => $this->session->userdata('nama'),
                    'usr_adm.usr_mail' => $this->session->userdata('mail'),
                    'usr_adm.hak_akses' => $this->session->userdata('hakakses')
                ])
                ->get()
                ->result();
        if ($exec == []) {
            redirect('Error', 'refresh');
        } else {
            return true;
        }
    }

    function askldl($data) {
        $exec = $this->db->select('usr_adm.id,usr_adm.pwd')
                ->from('usr_adm')
                ->where([
                    'usr_adm.id' => $this->session->userdata('id'),
                    'usr_adm.pwd' => sha1($data['oldpwd'])
                ])
                ->get()
                ->result();
        if ($exec == []) {
            $this->session->sess_destroy();
            echo '<script>alert("You entered the wrong old password");window.location.href="' . base_url('Auth/index/') . '";</script>';
        } else {
            $this->cghnbgyuj($data);
        }
    }

    private function cghnbgyuj($data) {
        $this->db->trans_begin();
        $this->db->set('usr_adm.pwd', sha1($data['newpwd']))
                ->where('usr_adm.id', $this->session->userdata('id'))
                ->update('usr_adm');
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script>alert("Error while updating data !");window.location.href="' . base_url('Auth/askldl/') . '";</script>';
        } else {
            $this->db->trans_commit();
            echo '<script>alert("Sucess updating data !");window.location.href="' . base_url('Admin/Dashboard/') . '";</script>';
        }
    }

    function Process($data) {
        $this->db->cache_on();
        $exec = $this->db->select('usr_adm.id, usr_adm.uname, usr_adm.usr_mail, usr_adm.hak_akses,usr_adm.pwd, usr_adm.pict')
                ->from('usr_adm')
                ->where(['usr_adm.uname' => $data['uname'], 'usr_adm.pwd' => sha1($data['pwd'])])
                ->limit(1)
                ->get();
        if ($exec->num_rows() == 1) {
            return $exec->result();
        } else {
            $this->session->sess_destroy();
        }
    }

}
