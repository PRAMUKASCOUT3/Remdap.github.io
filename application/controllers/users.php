<?php
defined('BASEPATH') or exit('No direct script access allowed');

class users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_users');
    }


    public function index()
    {
        $data['title'] = "Manajemen Data Users";

        $data['users'] = $this->m_users->tampilan_data()->result_array();

        $this->load->view('layouts/header');
        $this->load->view('users/v_data', $data);
        $this->load->view('layouts/footer');
    }

    function insert()
    {

        $u = $this->input->post('username');
        $n = $this->input->post('nama_lengkap');
        $p = $this->input->post('password');
        $ha = $this->input->post('hak_akses');

        $data = array(
            'username' => $u,
            'nama_lengkap' => $n,
            'password' => $p,
            'hak_akses' => $ha
        );

        $this->m_users->insert_data($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> User Berhasil Ditambahkan.</div>');

        redirect('users');
    }

    function tambah()
    {

        $data['title'] = "Tambah Data User";

        $this->load->view('layouts/header', $data);
        $this->load->view('users/v_data_tambah', $data);
        $this->load->view('layouts/footer');
    }

    function edit($id)
    {

        $data['title'] = "Edit Data Users";

        $where = array('id' => $id);
        $data['r'] = $this->m_users->edit_data($where)->row_array();

        $this->load->view('layouts/header', $data);
        $this->load->view('users/v_data_edit', $data);
        $this->load->view('layouts/footer');
    }

    function update()
    {
        $id = $this->input->post('id');
        $u = $this->input->post('username');
        $n = $this->input->post('nama_lengkap');
        $p = $this->input->post('password');
        $ha = $this->input->post('hak_akses');

        $data = array(
            'username' => $u,
            'nama_lengkap' => $n,
            'password' => $p,
            'hak_akses'=> $ha
        );

        $where = array ('id' => $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> User Berhasil Diubah.</div>');
        $this->m_users->update_data($data, $where);

        redirect('users');
    }

    function hapus($id){

        $where = array ('id'=>$id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> User Berhasil Dihapus.</div>');
        $this->m_users->hapus_data($where);

        redirect('users');
    }

    public function cetak ()
    {
        $berdasarkan = $this->request->GetPostGet("berdasarkan");
        $isi = $this->request->GetPostGet("isi");
        $tanggal11 = $this->request->GetPostGet("tanggal11");
        $tanggal12 = $this->request->GetPostGet("tanggal12");
        if ($berdasarkan) {
            if ($tanggal11){
                $this->data['datas'] = DataAdminRepo :: cetak_berdasarkan_tanggal ($berdasarkan,$tanggal11,$tanggal12);
            }else {
                $this->data['datas'] = DataAdminRepo :: cetak_berdasarkan ($berdasarkan,$isi);
            }
        }else {
            $this->data['datas'] = DataAdminRepo :: cetak_semua();
        }
        return view ("users/cetak", $this->data);
    }
}
