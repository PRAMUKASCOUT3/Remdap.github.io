<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lahiran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_lahiran');
    }


    public function index()
    {
        $data['title'] = "Manajemen Data lahiran";
        $data['lahiran'] = $this->m_lahiran->tampilan_data()->result_array();

        $this->load->view('layouts/header',$data);
        $this->load->view('lahiran/v_data', $data);
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
        $nt = $this->input->post('No_telpon');
        $pi = $this->input->post('pekerjaan_istri');
        $ps = $this->input->post('pekerjaan_suami');
        $klh = $this->input->post('keluhan');
        // $tdk = $this->input->post('tindakan');
        $td = $this->input->post('TD');
        $s = $this->input->post('S');
        $bb = $this->input->post('BB');
        $tfu = $this->input->post('TFU');
        $djj = $this->input->post('DJJ');
        $pd = $this->input->post('PD');
        $p1 = $this->input->post('porsio1');
        $p2 = $this->input->post('porsio2');
        $kbn = $this->input->post('ketuban');
        $ph = $this->input->post('penurunan_HOD');
        $bl = $this->input->post('bayi_lahir');
        $pkl = $this->input->post('pukul');
        $bdn = $this->input->post('berat_badan');
        $pb = $this->input->post('PB');
        $jk = $this->input->post('JK');
        $ans =$this->input->post('anus');
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
            'No_telpon' => $nt,
            'pekerjaan_istri' => $pi,
            'pekerjaan_suami' => $ps,
            'keluhan' => $klh,
            // 'tindakan' => $tdk,
            'TD' => $td,
            'S' => $s,
            'BB' => $bb,
            'TFU' => $tfu,
            'DJJ' => $djj,
            'PD' => $pd,
            'porsio1' => $p1,
            'porsio2' => $p2,
            'ketuban' => $kbn,
            'penurunan_HOD' => $ph,
            'bayi_lahir' => $bl,
            'pukul' => $pkl,
            'berat_badan' => $bdn,
            'PB'=> $pb,
            'JK' => $jk,
            'anus' => $ans,
            'keterangan' => $ket
        );

        $this->m_lahiran->insert_data($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Lahiran Berhasil di tambah.</div>');

        redirect('lahiran');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data Lahiran";

        $this->load->view('layouts/header', $data);
        $this->load->view('lahiran/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data lahiran";

        $where = array('id_lahiran' => $id);
        $data['r'] = $this->m_lahiran->edit_data($where)->row_array();

        $this->load->view('layouts/header', $data);
        $this->load->view('lahiran/v_data_edit', $data);
        $this->load->view('layouts/footer');
    }

    function update()
    {
        $id = $this->input->post('id_lahiran');
        $tgl = $this->input->post('tanggal');
        $ni = $this->input->post('nama_istri');
        $ns = $this->input->post('nama_suami');
        $ui = $this->input->post('umur_istri');
        $us = $this->input->post('umur_suami');
        $almt = $this->input->post('alamat');
        $nt = $this->input->post('No_telpon');
        $pi = $this->input->post('pekerjaan_istri');
        $ps = $this->input->post('pekerjaan_suami');
        $klh = $this->input->post('keluhan');
        $tdk = $this->input->post('tindakan');
        $td = $this->input->post('TD');
        $s = $this->input->post('S');
        $bb = $this->input->post('BB');
        $tfu = $this->input->post('TFU');
        $djj = $this->input->post('DJJ');
        $pd = $this->input->post('PD');
        $p1 = $this->input->post('porsio1');
        $p2 = $this->input->post('porsio2');
        $kbn = $this->input->post('ketuban');
        $ph = $this->input->post('penurunan_HOD');
        $bl = $this->input->post('bayi_lahir');
        $pkl = $this->input->post('pukul');
        $bdn = $this->input->post('berat_badan');
        $pb = $this->input->post('PB');
        $jk = $this->input->post('JK');
        $ans =$this->input->post('anus');
        $ket = $this->input->post('keterangan');

        $data = array(
            'tanggal' => $tgl,
            'nama_istri' => $ni,
            'nama_suami' => $ns,
            'umur_istri' => $ui,
            'umur_suami' => $us,
            'alamat' => $almt,
            'No_telpon' => $nt,
            'pekerjaan_istri' => $pi,
            'pekerjaan_suami' => $ps,
            'keluhan' => $klh,
            'tindakan' => $tdk,
            'TD' => $td,
            'S' => $s,
            'BB' => $bb,
            'TFU' => $tfu,
            'DJJ' => $djj,
            'PD' => $pd,
            'porsio1' => $p1,
            'porsio2' => $p2,
            'ketuban' => $kbn,
            'penurunan_HOD' => $ph,
            'bayi_lahir' => $bl,
            'pukul' => $pkl,
            'berat_badan' => $bdn,
            'PB'=> $pb,
            'JK' => $jk,
            'anus' => $ans,
            'keterangan' => $ket
        );

        $where = array('id_lahiran' => $id);
        $this->m_lahiran->update_data($data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Lahiran Berhasil Diubah.</div>');

        redirect('lahiran');
    }

    function hapus($id)
    {

        $where = array('id_lahiran' => $id);
        $this->m_lahiran->hapus_data($where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Lahiran Berhasil DiHapus.</div>');

        redirect('lahiran');
    }
    public function cetak_laporan()
	{
		$data['title'] = 'LAPORAN DATA LAHIRAN';
		$data['lahiran'] = $this->m_lahiran->tampilan_data()->result_array();
		
		$this->load->view('lahiran/laporan_lahiran',$data);
	}

    public function print_laporan()
	{
		$data['title'] = 'LAPORAN DATA LAHIRAN';
		$data['lahiran'] = $this->m_lahiran->tampilan_data()->result_array();
		
		$this->load->view('lahiran/laporan_lahiran1',$data);
	}
    public function view() {
        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');
        
        $data['title'] = 'Laporan Berdasarkan Tanggal';
        $data['lahiran'] = $this->m_lahiran->get_laporan_by_tanggal($tanggal_awal, $tanggal_akhir);
        $this->load->view('laporan/view', $data);
    }
    
}
