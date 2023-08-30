<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Referensi_ekskul_model extends CI_Model
{
    public $table = 'referensi_ekskul';
    public $id = 'id';
    public $order = 'DESC';

    public function __construct()
    {
        parent::__construct();
    }

    // get all
    public function get_all()
    {
        $this->db->order_by($this->id, $this->order);

        return $this->db->get($this->table)->result();
    }

    // get data by id
    public function get_by_id($id)
    {
        $id= decrypt_url($id);
        $this->db->where($this->id, $id);

        return $this->db->get($this->table)->row();
    }

    // insert data
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    public function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    public function delete($id)
    {
        $id= decrypt_url($id);
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Referensi_profesi_model.php */
/* Location: ./application/models/Referensi_profesi_model.php */
