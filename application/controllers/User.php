<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->library('form_validation');
		
    }

	public function index()
	{
		// $this->product_m->get();
		$data['row'] = $this->user_m->get();
		$this->template->load('template','user/user_data', $data);
	}

    public function add()
    {
        $this->form_validation->set_rules('id_pelanggan', 'ID Pelanggan', 'required');
        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('ip_add', 'IP', 'required');
        $this->form_validation->set_rules('koneksi', 'Koneksi', 'required');
        $this->form_validation->set_rules('bdwth', 'BDWTH', 'required');
        $this->form_validation->set_rules('tgl_pasang', 'Tanggal Pasang', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_wa', 'No WhatsApp', 'required');
        
        $this->form_validation->set_message('required', '%s harus diisi');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan');
        
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        
        if ($this->form_validation->run() == FALSE){
            $this->template->load('template', 'user/form_add');
        }else{
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil ditambah')</script>";
            }
            echo "<script>window.location='".site_url('user')."'</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('id_pelanggan', 'ID Pelanggan', 'required');
        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('ip_add', 'IP', 'required');
        $this->form_validation->set_rules('koneksi', 'Koneksi', 'required');
        $this->form_validation->set_rules('bdwth', 'BDWTH', 'required');
        $this->form_validation->set_rules('tgl_pasang', 'Tanggal Pasang', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_wa', 'No WhatsApp', 'required');
        
        $this->form_validation->set_message('required', '%s harus diisi');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE){
            $query = $this->user_m->get($id);
            if($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/form_edit', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='".site_url('user')."'</script>";

            }
        }else{
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil diupdate')</script>";
            }
            echo "<script>window.location='".site_url('user')."'</script>";
        }
    }

	public function del()
    {
        $id = $this->input->post('id');
        $this->user_m->del($id);

            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus')</script>";
            }
            echo "<script>window.location='".site_url('user')."'</script>";
    }
}
