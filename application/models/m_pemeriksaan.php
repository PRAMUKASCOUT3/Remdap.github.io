<?php

class m_pemeriksaan extends CI_Model
{

    function tampilan_data()
    {
        return $this->db->get('pemeriksaan');

    }

    function insert_data($data)
    {
        
        return $this->db->insert('pemeriksaan', $data);
        return $this->db->insert('pasien', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('pemeriksaan', $where);
        
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('pemeriksaan', $data);
        $this->db->update('pasien', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('pemeriksaan');
    }

    public function get_pemeriksaan() {
        $this->db->select('*');
        $this->db->from('pemeriksaan');
        $this->db->join('pasien', 'pemeriksaan.id_pasien = pasien.id_pasien','left');
        return $this->db->get('');
        
    }
    function get_pemeriksaan_all() {
        $query = $this->db->get('pemeriksaan');
        return $query->result_array();
    }

    public function count_all() {
        return $this->db->count_all('pemeriksaan');
}
}
