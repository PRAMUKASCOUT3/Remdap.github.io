<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pemeriksaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_pemeriksaan');
        $this->load->model('m_pasien');
        
    }


    public function index()
    {
        $this->load->model('m_pemeriksaan');
        $data['title'] = "Manajemen Data pemeriksaan";
        $data['pemeriksaan'] = $this->m_pemeriksaan->get_pemeriksaan()->result_array();

        $this->load->view('layouts/header');
        $this->load->view('pemeriksaan/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $tl = $this->input->post('tanggal_lahir');
        $ip = $this->input->post('id_pasien');
        $kl = $this->input->post('keluhan');
        $dg = $this->input->post('diagnosa');
        $hp = $this->input->post('hasil_pemeriksaan');
        $tp = $this->input->post('terapi');
        

        $data = array(
            'tanggal_lahir' => $tl,
            'id_pasien' => $ip,
            'keluhan' => $kl,
            'diagnosa' => $dg,
            'hasil_pemeriksaan' => $hp,
            'terapi' => $tp
        );

        $this->m_pemeriksaan->insert_data($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Pemeriksaan Pasien Berhasil Ditambahkan.</div>');

        redirect('pemeriksaan');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data Pemeriksaan Pasien";
        $data['pasien'] = $this->m_pasien->get_pasien_all();

        $this->load->view('layouts/header',);
        $this->load->view('pemeriksaan/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data pemeriksaan";

        $where = array('id_pemeriksaan' => $id);
        $data['r'] = $this->m_pemeriksaan->edit_data($where)->row_array();

        $this->load->view('layouts/header',);
        $this->load->view('pemeriksaan/v_data_edit', $data);
        $this->load->view('layouts/footer');
    }

    function update()
    {
        $id = $this->input->post('id_pemeriksaan');
        $tl = $this->input->post('tanggal_lahir');
        $ip = $this->input->post('id_pasien');
        $kl = $this->input->post('keluhan');
        $dg = $this->input->post('diagnosa');
        $hp = $this->input->post('hasil_pemeriksaan');
        $tp = $this->input->post('terapi');

        $data = array(
            'tanggal_lahir' => $tl,
            'id_pasien' => $ip,
            'keluhan' => $kl,
            'diagnosa' => $dg,
            'hasil_pemeriksaan' => $hp,
            'terapi' => $tp
        );

        $where = array('id_pemeriksaan' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Pemeriksaan Pasien Berhasil Diubah.</div>');
        $this->m_pemeriksaan->update_data($data, $where);

        redirect('pemeriksaan');
    }

    function hapus($id)
    {

        $where = array('id_pemeriksaan' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Pemeriksaan Pasien Berhasil Dihapus.</div>');
        $this->m_pemeriksaan->hapus_data($where);

        redirect('pemeriksaan');
    }
}
