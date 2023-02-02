<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_pegawai');
    }


    public function index()
    {
        $data['title'] = "Manajemen Data pegawai";

        $data['pegawai'] = $this->m_pegawai->tampilan_data()->result_array();

        $this->load->view('layouts/header');
        $this->load->view('pegawai/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $u = $this->input->post('nama_pegawai');
        $ttl = $this->input->post('tempat_lahir');
        $tl = $this->input->post('tanggal_lahir');
        $umr = $this->input->post('umur');
        $jk = $this->input->post('jenis_kelamin');
        $almt = $this->input->post('alamat');
        $nt = $this->input->post('no_telpon');

          // Mengonversi tanggal ke dalam bentuk timestamp
          $request_timestamp = strtotime($umr);
          $today_timestamp = strtotime(date('Y-m-d'));
          // Menghitung perbedaan tanggal dalam detik
  $difference_in_seconds = abs($today_timestamp - $request_timestamp);
          $today_timestamp = strtotime(date('Y-m-d'));
          // Menghitung perbedaan tanggal dalam hari
          $difference_in_days = floor($difference_in_seconds / (60 * 60 * 24 * 365));

        $data = array(
            'nama_pegawai' => $u,
            'tempat_lahir' => $ttl,
            'tanggal_lahir' => $tl,
            'jenis_kelamin' => $jk,
            'umur' => $difference_in_days,
            'alamat' => $almt,
            'no_telpon' => $nt
        );

        $this->m_pegawai->insert_data($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Pegawai Berhasil Ditambahkan.</div>');

        redirect('pegawai');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data User";

        $this->load->view('layouts/header', $data);
        $this->load->view('pegawai/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data pegawai";

        $where = array('id_pegawai' => $id);
        $data['r'] = $this->m_pegawai->edit_data($where)->row_array();

        $this->load->view('layouts/header', $data);
        $this->load->view('pegawai/v_data_edit', $data);
        $this->load->view('layouts/footer');
    }

    function update()
    {
        $id = $this->input->post('id_pegawai');
        $u = $this->input->post('nama_pegawai');
        $ttl = $this->input->post('tempat_lahir');
        $tl = $this->input->post('tanggal_lahir');
        $umr = $this->input->post('umur');
        $jk = $this->input->post('jenis_kelamin');
        $almt = $this->input->post('alamat');
        $nt = $this->input->post('no_telpon');

        $data = array(
            'nama_pegawai' => $u,
            'tempat_lahir' => $ttl,
            'tanggal_lahir' => $tl,
            'umur' => $umr,
            'jenis_kelamin' => $jk,
            'alamat' => $almt,
            'no_telpon' => $nt
        );

        $where = array('id_pegawai' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Pegawai Berhasil Diubah.</div>');
        $this->m_pegawai->update_data($data, $where);

        redirect('pegawai');
    }

    function hapus($id)
    {

        $where = array('id_pegawai' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Pegawai Berhasil diHapus.</div>');
        $this->m_pegawai->hapus_data($where);

        redirect('pegawai');
    }

    
}
