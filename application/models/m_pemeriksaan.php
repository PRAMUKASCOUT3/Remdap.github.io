<?php

class M_Pemeriksaan extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('pemeriksaan');
    }

    public function insert_data($data)
    {
        $this->db->insert('pemeriksaan', $data);
        return $this->db->insert_id();
    }

    function edit_data($where){
        return $this->db->get_where('pemeriksaan', $where);

    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('pemeriksaan', $data);
    }

    public function delete_data($id)
    {
        $this->db->where($id);
        $this->db->delete('pemeriksaan');
    }

    public function get_pemeriksaan()
    {
        $this->db->select('pemeriksaan.*, obat.nama_obat as nama_obat');
        $this->db->select('pemeriksaan.*, pasien.nama_pasien as nama_pasien');
        $this->db->from('pemeriksaan');
        $this->db->join('obat', 'pemeriksaan.id_obat = obat.id_obat', 'left');
        $this->db->join('pasien', 'pemeriksaan.id_pasien = pasien.id_pasien', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_all()
    {
        return $this->db->count_all_results('pemeriksaan');
    }
    public function get_laporan_by_tanggal($tanggal_awal, $tanggal_akhir) {
        $this->db->select('pemeriksaan.*, obat.nama_obat as nama_obat');
        $this->db->select('pemeriksaan.*, pasien.nama_pasien as nama_pasien');
        $this->db->from('pemeriksaan');
        $this->db->join('obat', 'pemeriksaan.id_obat = obat.id_obat', 'left');
        $this->db->join('pasien', 'pemeriksaan.id_pasien = pasien.id_pasien', 'left');
        $this->db->where('tanggal >=', $tanggal_awal);
        $this->db->where('tanggal <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }
} 