<?php

class m_rekam_medis extends CI_Model{

    function tampilan_data(){
        return $this->db->get('rekam_medis');

    }

    function insert_data($data){
        return $this->db->insert('rekam_medis',$data);

    }

    function edit_data($where){
        return $this->db->get_where('rekam_medis', $where);

    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('rekam_medis', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('rekam_medis');
    }

    
    public function get_rekam() {
        $this->db->select('rekam_medis.*, pegawai.nama_pegawai as nama_pegawai');
        $this->db->select('rekam_medis.*, pasien.nama_pasien as nama_pasien');
        $this->db->select('rekam_medis.*, pemeriksaan.hasil_pemeriksaan as hasil_pemeriksaan');
        $this->db->from('rekam_medis');
        $this->db->join('pegawai', 'rekam_medis.id_pegawai = pegawai.id_pegawai');
        $this->db->join('pasien', 'rekam_medis.id_pasien = pasien.id_pasien');
        $this->db->join('pemeriksaan','rekam_medis.id_pemeriksaan = pemeriksaan.hasil_pemeriksaan');
        $query = $this->db->get();
        return $query->result_array();
        
        // $this->db->select('rekam_medis.*, pasien.nama_pasien as nama_pasien');
        // $this->db->from('rekam_medis');
        
        // $query = $this->db->get();
        
        // $this->db->select('rekam_medis.*, pemeriksaan.hasil_pemeriksaan as hasil_pemeriksaan');
        // $this->db->from('rekam_medis');
        
        // $query = $this->db->get();
    }
    

    public function count_all() {
        return $this->db->count_all('rekam_medis');
}
}