<?php

class TryJson extends CI_Model {

    function Simpan($data) {
        $this->db->insert('portfolio', $data);
        
    }

}
