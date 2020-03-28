<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['id_pelanggan'] = $post['id_pelanggan'];
        $params['nama'] = $post['nama'];
        $params['ip_add'] = $post['ip_add'];
        $params['koneksi'] = $post['koneksi'];
        $params['bdwth'] = $post['bdwth'];
        $params['tgl_pasang'] = $post['tgl_pasang'];
        $params['alamat'] = $post['alamat'];
        $params['no_wa'] = $post['no_wa'];
        
        $this->db->insert('user', $params);
    }

    public function edit($post)
    {
        $params['id_pelanggan'] = $post['id_pelanggan'];
        $params['nama'] = $post['nama'];
        $params['ip_add'] = $post['ip_add'];
        $params['koneksi'] = $post['koneksi'];
        $params['bdwth'] = $post['bdwth'];
        $params['tgl_pasang'] = $post['tgl_pasang'];
        $params['alamat'] = $post['alamat'];
        $params['no_wa'] = $post['no_wa'];

        $this->db->where('id', $post['id']);
        $this->db->update('user', $params);
    }

    public function del($id)
	{
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}