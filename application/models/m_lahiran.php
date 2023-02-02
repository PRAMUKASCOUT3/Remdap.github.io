<?php

class m_lahiran extends CI_Model{

    function tampilan_data(){
        return $this->db->get('lahiran');

    }

    function insert_data($data){
        return $this->db->insert('lahiran',$data);

    }

    function edit_data($where){
        return $this->db->get_where('lahiran', $where);

    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('lahiran', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('lahiran');

    }

    public function count_all() {
        return $this->db->count_all('lahiran');
}
}