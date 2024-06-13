<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMahasiswa extends CI_Model {
    public function tampilData (){
        return $this->db->get('mhs');
    }
    public function simpanMahasiswa ($data=null){
        return $this->db->insert('mhs', $data);
    }
    function editData ($where, $table) {
        return $this->db->get_where($table, $where);
    }

    function updateMahasiswa ($where = null, $data=null) {
        return $this->db->update('mhs', $data, $where);
    }

    function hapusMahasiswa($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
}