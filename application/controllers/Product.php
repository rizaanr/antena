<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('product_m');
        $this->load->library('form_validation');
		
    }

	public function index()
	{
		// $this->product_m->get();
		$data['row'] = $this->product_m->get();
		$this->template->load('template','product/antena_data', $data);
	}

    public function add()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tipe', 'Type', 'required');
        $this->form_validation->set_rules('ip_add', 'IP', 'required');
        $this->form_validation->set_rules('freq', 'Freq', 'required');
        $this->form_validation->set_rules('cw', 'CW', 'required');
        
        $this->form_validation->set_message('required', '%s harus diisi');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan');
        
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        
        if ($this->form_validation->run() == FALSE){
            $this->template->load('template', 'product/form_add');
        }else{
            $post = $this->input->post(null, TRUE);
            $this->product_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil ditambah')</script>";
            }
            echo "<script>window.location='".site_url('product')."'</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tipe', 'Type', 'required');
        $this->form_validation->set_rules('ip_add', 'IP', 'required');
        $this->form_validation->set_rules('freq', 'Freq', 'required');
        $this->form_validation->set_rules('cw', 'CW', 'required');
        
        $this->form_validation->set_message('required', '%s harus diisi');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE){
            $query = $this->product_m->get($id);
            if($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'product/form_edit', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='".site_url('product')."'</script>";

            }
        }else{
            $post = $this->input->post(null, TRUE);
            $this->product_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil diupdate')</script>";
            }
            echo "<script>window.location='".site_url('product')."'</script>";
        }
    }

	public function del()
    {
        $id = $this->input->post('id');
        $this->product_m->del($id);

            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus')</script>";
            }
            echo "<script>window.location='".site_url('product')."'</script>";
    }
}
