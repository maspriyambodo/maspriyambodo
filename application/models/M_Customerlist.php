<?php

class M_Customerlist extends CI_Model {

    function Customerlist($id = null) {
        if ($id == null) {
            $exec = $this->db->select('*')
                    ->from('list_customer')
                    ->get()
                    ->result();
        } else {
            $exec = $this->db->select('*')
                    ->from('list_customer')
                    ->where('list_customer.id', $id)
                    ->get();
        }

        return $exec;
    }

    function Simpan($data) {
        $this->db->trans_start();
        $this->db->insert('list_customer', $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $response = array('status' => 'OK', 'msg' => 'data failed to save !');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $this->db->trans_commit();
            $response = array('status' => 'OK', 'msg' => 'successfully saved data !');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

    function Ubah($id) {
        $exec = $this->db->select('*')
                ->from('list_customer')
                ->where('id', $id)
                ->get()
                ->result();
        return $exec;
    }

}
