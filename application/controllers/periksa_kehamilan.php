<?php
defined('BASEPATH') or exit('No direct script access allowed');

class periksa_kehamilan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_periksa_kehamilan');
    }


    public function index()
    {
        $data['title'] = "Manajemen Data periksa kehamilan";

        $data['periksa_kehamilan'] = $this->m_periksa_kehamilan->tampilan_data()->result_array();

        $this->load->view('layouts/header');
        $this->load->view('periksa_kehamilan/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $tgl = $this->input->post('tanggal');
        $ni = $this->input->post('nama_istri');
        $ns = $this->input->post('nama_suami');
        $ui = $this->input->post('umur_istri');
        $us = $this->input->post('umur_suami');
        $almt = $this->input->post('alamat');
        $nt = $this->input->post('no_telpon');
        $g = $this->input->post('Gravida');
        $p = $this->input->post('Partus');
        $a = $this->input->post('Abortus');
        $hpht = $this->input->post('HPHT');
        $tp = $this->input->post('TP');
        $ps = $this->input->post('pemeriksaan');
        $klh = $this->input->post('keluhan');
        $tdk = $this->input->post('terapi');
        $ket = $this->input->post('keterangan');

        // Mengonversi tanggal ke dalam bentuk timestamp
        $request_timestamp = strtotime($ui);
        $request_timestamp = strtotime($us);
        $today_timestamp = strtotime(date('Y-m-d'));
        // Menghitung perbedaan tanggal dalam detik
        $difference_in_seconds = abs($today_timestamp - $request_timestamp);
        $today_timestamp = strtotime(date('Y-m-d'));
        // Menghitung perbedaan tanggal dalam hari
        $difference_in_days = floor($difference_in_seconds / (60 * 60 * 24 * 365));

        $data = array(
            'tanggal' => $tgl,
            'nama_istri' => $ni,
            'nama_suami' => $ns,
            'umur_istri' => $difference_in_days,
            'umur_suami' => $difference_in_days,
            'alamat' => $almt,
            'no_telpon' => $nt,
            'Gravida' => $g,
            'Partus' => $p,
            'Abortus' => $a,
            'HPHT' => $hpht,
            'TP' => $tp,
            'pemeriksaan' => $ps,
            'keluhan' => $klh,
            'terapi' => $tdk,
            'keterangan' => $ket
        );

        $this->m_periksa_kehamilan->insert_data($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Periksa Kehamilan Berhasil Ditambahkan.</div>');
        redirect('periksa_kehamilan');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data Periksa Kehamilan";

        $this->load->view('layouts/header', $data);
        $this->load->view('periksa_kehamilan/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data periksa kehamilan";

        $where = array('id_periksa' => $id);
        $data['r'] = $this->m_periksa_kehamilan->edit_data($where)->row_array();

        $this->load->view('layouts/header', $data);
        $this->load->view('periksa_kehamilan/v_data_edit', $data);
        $this->load->view('layouts/footer');
    }

    function update()
    {
        $id = $this->input->post('id_periksa');
        $tgl = $this->input->post('tanggal');
        $ni = $this->input->post('nama_istri');
        $ns = $this->input->post('nama_suami');
        $ui = $this->input->post('umur_istri');
        $us = $this->input->post('umur_suami');
        $almt = $this->input->post('alamat');
        $nt = $this->input->post('no_telpon');
        $g = $this->input->post('Gravida');
        $p = $this->input->post('Partus');
        $a = $this->input->post('Abortus');
        $ps = $this->input->post('HPHT');
        $ps = $this->input->post('TP');
        $ps = $this->input->post('pemeriksaan');
        $klh = $this->input->post('keluhan');
        $tdk = $this->input->post('terapi');
        $ket = $this->input->post('keterangan');

        $data = array(
          'tanggal' => $tgl,
            'nama_istri' => $ni,
            'nama_suami' => $ns,
            'umur_istri' => $ui,
            'umur_suami' => $us,
            'alamat' => $almt,
            'no_telpon' => $nt,
            'Gravida' => $g,
            'Partus' => $p,
            'Abortus' => $a,
            'HPHT' => $g,
            'TP' => $g,
            'pemeriksaan' => $ps,
            'keluhan' => $klh,
            'terapi' => $tdk,
            'keterangan' => $ket
        );

        $where = array('id_periksa' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Periksa Kehamilan Berhasil Diubah.</div>');
        $this->m_periksa_kehamilan->update_data($data, $where);

        redirect('periksa_kehamilan');
    }

    function hapus($id)
    {

        $where = array('id_periksa' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Periksa Kehamilan Berhasil Dihapus.</div>');
        $this->m_periksa_kehamilan->hapus_data($where);

        redirect('periksa_kehamilan');
    }

    public function cetak_laporan()
	{
		$data['title'] = 'LAPORAN PERIKSA KEHAMILAN';
		$data['periksa_kehamilan'] = $this->m_periksa_kehamilan->tampilan_data()->result_array();
		
		$this->load->view('periksa_kehamilan/laporan_periksa_kehamilan',$data);
	}
}
