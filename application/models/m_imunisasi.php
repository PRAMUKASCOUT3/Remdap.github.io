<?php

class m_imunisasi extends CI_Model
{

    function tampilan_data()
    {
        return $this->db->get('imunisasi');

    }

    function insert_data($data)
    {

        return $this->db->insert('imunisasi', $data);
        return $this->db->insert('pasien', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('imunisasi', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('imunisasi', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('imunisasi');
    }

    function get_imunisasi() {
        $this->db->select('imunisasi.*, pasien.nama_pasien as nama_pasien');
        $this->db->from('imunisasi');
        $this->db->join('pasien', 'imunisasi.id_pasien = pasien.id_pasien');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function count_all() {
        return $this->db->count_all('imunisasi');
}
}
