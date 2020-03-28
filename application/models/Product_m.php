<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('antena');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['nama'] = $post['nama'];
        $params['tipe'] = $post['tipe'];
        $params['ip_add'] = $post['ip_add'];
        $params['freq'] = $post['freq'];
        $params['cw'] = $post['cw'];
        $this->db->insert('antena', $params);
    }

    public function edit($post)
    {
        $params['nama'] = $post['nama'];
        $params['tipe'] = $post['tipe'];
        $params['ip_add'] = $post['ip_add'];
        $params['freq'] = $post['freq'];
        $params['cw'] = $post['cw'];
        $this->db->where('id', $post['id']);
        $this->db->update('antena', $params);
    }

    public function del($id)
	{
        $this->db->where('id', $id);
        $this->db->delete('antena');
    }
}