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

    public function get_laporan_by_tanggal($tanggal_awal, $tanggal_akhir) {
        $this->db->select('*');
        $this->db->from('lahiran');
        $this->db->where('tanggal >=', $tanggal_awal);
        $this->db->where('tanggal <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }
}