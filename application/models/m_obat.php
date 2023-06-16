<?php

class m_obat extends CI_Model{

    function tampilan_data(){
        return $this->db->get('obat');

    }

    function insert_data($data){
        return $this->db->insert('obat',$data);

    }

    function edit_data($where){
        return $this->db->get_where('obat', $where);

    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('obat', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('obat');

    }
    public function count_all() {
        return $this->db->count_all('obat');
    }
    
    function get_obat_all() {
    $query = $this->db->get('obat');
    return $query->result_array();
    }
}