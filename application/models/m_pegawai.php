<?php

class m_pegawai extends CI_Model
{

    function tampilan_data()
    {
        return $this->db->get('pegawai');
    }

    function insert_data($data)
    {
        return $this->db->insert('pegawai', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('pegawai', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('pegawai', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('pegawai');
    }
    function get_pegawai_all() {
        $query = $this->db->get('pegawai');
        return $query->result_array();
    }
    public function count_all() {
        return $this->db->count_all('pegawai');  
}
}
