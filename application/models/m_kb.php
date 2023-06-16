<?php

class m_kb extends CI_Model
{

    function tampilan_data()
    {
        return $this->db->get('kb');
    }

    function insert_data($data)
    {
        return $this->db->insert('kb', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('kb', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('kb', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('kb');
    }
    public function count_all() {
        return $this->db->count_all('kb');
    }
    public function get_laporan_by_tanggal($tanggal_awal, $tanggal_akhir) {
        $this->db->select('*');
        $this->db->from('kb');
        $this->db->where('tanggal >=', $tanggal_awal);
        $this->db->where('tanggal <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }
}
