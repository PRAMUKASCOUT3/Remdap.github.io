<?php

class m_pasien extends CI_Model
{

    function tampilan_data()
    {
        return $this->db->get('pasien');
    }

    function insert_data($data)
    {
        return $this->db->insert('pasien', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('pasien', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('pasien', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('pasien');
    }

    function get_pasien($id) {
        $this->db->where('id_pasien', $id);
        $query = $this->db->get('pasien');
        return $query->row();
    }
    function get_pasien_all() {
        $query = $this->db->get('pasien');
        return $query->result_array();
    }
    function getData()
	{
		$data_siswa = $this->db->get('pasien');
		return $data_siswa->result();
	}

    public function count_all() {
        return $this->db->count_all('pasien');

    }
    
    

}