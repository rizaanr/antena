<?php

Class Fungsi {

    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
    }

    public function user_login()
    {
        $this->ci->load->model('admin_m');
        $user_id = $this->ci->session->userdata('id');
        $user_data = $this->ci->admin_m->get($user_id)->row();
        return $user_data;
    }
}