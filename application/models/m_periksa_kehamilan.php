<?php

class m_periksa_kehamilan extends CI_Model{

    function tampilan_data(){
        return $this->db->get('periksa_kehamilan');

    }

    function insert_data($data){
        return $this->db->insert('periksa_kehamilan',$data);

    }

    function edit_data($where){
        return $this->db->get_where('periksa_kehamilan', $where);

    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('periksa_kehamilan', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('periksa_kehamilan');

    }

    public function count_all() {
        return $this->db->count_all('periksa_kehamilan');
}
}