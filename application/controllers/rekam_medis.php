<?php
defined('BASEPATH') or exit('No direct script access allowed');

class rekam_medis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_rekam_medis');
        $this->load->model('m_pegawai');
        $this->load->model('m_pemeriksaan');
        $this->load->model('m_pasien');
        
    }


    public function index()
    {
        $data['title'] = "Manajemen Data Rekam Medis";
        $data['rekam_medis'] = $this->m_rekam_medis->get_rekam();
        
        $this->load->view('layouts/header');
        $this->load->view('rekam_medis/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $u = $this->input->post('tanggal');
        $n = $this->input->post('id_pasien');
        $p = $this->input->post('id_pegawai');
        $q = $this->input->post('id_pemeriksaan');

        $data = array(
            'tanggal' => $u,
            'id_pasien' => $n,
            'id_pegawai' => $p,
            'id_pemeriksaan' => $q
        );

        $this->m_rekam_medis->insert_data($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Rekam Medis Berhasil Ditambahkan.</div>');

        redirect('rekam_medis');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data User";
        $data['pasien'] = $this->m_pasien->get_pasien_all();
        $data['pegawai'] = $this->m_pegawai->get_pegawai_all();
        $data['pemeriksaan'] = $this->m_pemeriksaan->get_pemeriksaan_all();

        $this->load->view('layouts/header', $data);
        $this->load->view('rekam_medis/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data rekam_medis";

        $where = array('id_rekam_medis' => $id);
        $data['r'] = $this->m_rekam_medis->get_rekam();

        $this->load->view('layouts/header', $data);
        $this->load->view('rekam_medis/v_data_edit', $data);
        $this->load->view('layouts/footer');
    }

    function update()
    {
        $id = $this->input->post('id_rekam_medis');
        $u = $this->input->post('tanggal');
        $n = $this->input->post('id_pasien');
        $p = $this->input->post('id_pegawai');
        $q = $this->input->post('id_pemeriksaan');

        $data = array(
            'tanggal' => $u,
            'id_pasien' => $n,
            'id_pegawai' => $p,
            'id_pemeriksaan' => $q
        );

        $where = array ('id_rekam_medis' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Rekam Medis Berhasil Diubah.</div>');
        $this->m_rekam_medis->update_data($data, $where);

        redirect('rekam_medis');
    }

    function hapus($id){

        $where = array ('id_rekam_medis'=>$id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Rekam Medis Berhasil Dihapus.</div>');
        $this->m_rekam_medis->hapus_data($where);

        redirect('rekam_medis');
    }

    
}
