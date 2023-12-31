<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    function __construct(){
        parent::__construct();

		$this->load->model('m_login');
    }
    
	public function index(){
       
            $this->load->view('v_login');
    }
    public function login_aksi()
    {

        $user = $this->input->post('username', true);
        $pass =md5 ($this->input->post('password', true));
    
        //rule validasi
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
    
    
        if($this->form_validation->run() != FALSE){
    
            $where = array (
                'username' => $user,
                'password' => $pass
            );
    
            $ceklogin = $this->m_login->cek_login($where)->num_rows();
    
            if($ceklogin > 0 ){
                $data = $this->m_login->cek_login($where)->row();
    
                if ($data->hak_akses == 'pemilik') {
                    $sess_data = array(
                        'login'=>'OK',
                        'username'=> $user,
                        'hak_akses' => 'pemilik' 
                    );
                    $this->session->set_userdata($sess_data);
                    redirect(base_url());
                } else if ($data->hak_akses == 'asisten') {
                    $sess_data = array(
                        'login'=>'OK',
                        'username'=> $user,
                        'hak_akses' => 'asisten' 
                    );
                    $this->session->set_userdata($sess_data);
                    redirect(base_url());
                }
            } else{
                redirect('auth');
            }
        }else {
            $this->load-view('v_login');
        }
    }
    

    function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }

}



