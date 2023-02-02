<?php
defined('BASEPATH') or exit('No direct script access allowed');

class imunisasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_imunisasi');
        $this->load->model('m_pasien');

        
    }


    public function index()
    {
        $data['title'] = "Manajemen Data imunisasi";

        $data['imunisasi'] = $this->m_imunisasi->get_imunisasi();
        $this->load->view('layouts/header');
        $this->load->view('imunisasi/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $tgl = $this->input->post('tanggal');
        $ip = $this->input->post('id_pasien');
        $tl = $this->input->post('tanggal_lahir');
        $ortu = $this->input->post('nama_orang_tua');
        $almt = $this->input->post('alamat');
        $ji   = $this->input->post('jenis_imunisasi');
        $pg = $this->input->post('pengobatan');
        $ket = $this->input->post('keterangan');   


        $data = array(
            'tanggal' => $tgl,
            'id_pasien' => $ip,
            'tanggal_lahir' => $tl,
            'nama_orang_tua' => $ortu,
            'alamat' => $almt,
            'jenis_imunisasi' => $ji,
            'pengobatan' => $pg,
            'keterangan' => $ket
        );

        $this->m_imunisasi->insert_data($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data imunisasi Berhasil Ditambahkan.</div>');

        redirect('imunisasi');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data User";


        $data['pasien'] = $this->m_pasien->tampilan_data()->result_array();
        $data['imunisasi'] = $this->m_imunisasi->tampilan_data()->result_array();

        $this->load->view('layouts/header');
        $this->load->view('imunisasi/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data imunisasi";

        $where = array('id_imunisasi' => $id);
        $data['r'] = $this->m_imunisasi->edit_data($where)->row_array();
        

        $this->load->view('layouts/header');
        $this->load->view('imunisasi/v_data_edit', $data);
        $this->load->view('layouts/footer');
    }

    function update()
    {
        $id = $this->input->post('id_imunisasi');
        $tgl = $this->input->post('tanggal');
        $ip = $this->input->post('id_pasien');
        $tl = $this->input->post('tanggal_lahir');
        $ortu = $this->input->post('nama_orang_tua');
        $almt = $this->input->post('alamat');
        $ji   = $this->input->post('jenis_imunisasi');
        $pg = $this->input->post('pengobatan');
        $ket = $this->input->post('keterangan'); 
          


        $data = array(
            'tanggal' => $tgl,
            'id_pasien'=> $ip,
            'tanggal_lahir' => $tl,
            'nama_orang_tua' => $ortu,
            'alamat' => $almt,
            'jenis_imunisasi' => $ji,
            'pengobatan' => $pg,
            'keterangan' => $ket
        );

        $where = array ('id_imunisasi' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data imunisasi Berhasil Diubah.</div>');
        $this->m_imunisasi->update_data($data, $where);

        redirect('imunisasi');
    }

    function hapus($id){

        $where = array ('id_imunisasi'=>$id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data imunisasi Berhasil Dihapus.</div>');
        $this->m_imunisasi->hapus_data($where);

        redirect('imunisasi');
    }

    function get_nama_bayi()
    {
        $data['nama_bayi'] = $this->m_pasien->get_nama_bayi();
        $this->load->view('imunisasi/v_data_tambah', $data);
    }

    public function cetak_laporan()
	{
		$data['title'] = 'LAPORAN DATA IMUNISASI';
		$data['imunisasi'] = $this->m_imunisasi->get_imunisasi();
		
		$this->load->view('imunisasi/laporan_imunisasi',$data);
	}

   
}
