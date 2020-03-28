<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_m');
        $this->load->library('form_validation');
		
    }

	public function login()
	{
		$this->load->view('login');
    }

    public function register()
	{
        $this->form_validation->set_rules('name', 'Nama Depan', 'required');
        $this->form_validation->set_rules('l_name', 'Nama Belakang', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('pasconf', 'Konfirmasi Password', 'required|matches[password]');
        
        $this->form_validation->set_message('required', '%s harus diisi');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan');
        $this->form_validation->set_message('matches', '%s tidak sama');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan');
        
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('register');
        }else{
            $post = $this->input->post(null, TRUE);
            $this->admin_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Registrasi Berhasil')</script>";
            }
            echo "<script>window.location='".site_url('auth/login')."'</script>";
        }
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($post['login'])) {
            $this->load->model('admin_m');
            $query = $this->admin_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id' => $row->id,
                );
                $this->session->set_userdata($params);
                echo "<script>
                    alert('Selamat, Login Berhasil');
                    window.location='".site_url('dashboard')."';
                </script>";
            }else {
                echo "<script>
                    alert('Login Gagal, Silahkan Coba Lagi');
                    window.location='".site_url('auth/login')."';
                </script>";
            }
        }
    }
}
