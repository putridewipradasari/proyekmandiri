<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Event_model extends CI_Model
{
    public $table = 'event';
    public $id = 'id';
    public $order = 'DESC';
    public $ekskul ='ekskul';

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

    public function get_ref_ekskul()
    {
        return $this->db->get('referensi_ekskul')->result();
    }

    public function get_ref_email($ekskul)
    {
        //$sql = "SELECT email FROM `users` JOIN `profil` ON users.id = profil.id_user JOIN users_groups ON profil.id_user = users_groups.user_id WHERE ekskul = ?";
        //$this->db->query($sql, array($ekskul));

        //return $this->db->get('email')->result();

        $this->db->select('email');
        $this->db->from('users AS t1');
        $this->db->join('profil AS t2', 't1.id = t2.id_user');
        $this->db->join('users_groups AS t3', 't3.user_id = t2.id_user');
        $this->db->where('ekskul', $ekskul);

        return $this->db->get()->result();
    }

    // get data by id
    public function get_by_id($id)
    {
        $this->db->where($this->id, $id);

        return $this->db->get($this->table)->row();
    }

    // read per month
    public function read_per_month()
    {
        //$query = $this->db->query('SELECT * FROM `event` WHERE MONTH(tanggal_posting) = MONTH(CURRENT_DATE()) AND YEAR(tanggal_posting) = YEAR(CURRENT_DATE()) ORDER by `id` DESC');
        $query = $this->db->query('SELECT * FROM `event` WHERE MONTH(tanggal_acara) = MONTH(CURRENT_DATE()) AND YEAR(tanggal_acara) = YEAR(CURRENT_DATE()) and DAY(tanggal_acara) >= DAY(CURRENT_DATE()) ORDER by `id` DESC');

        return $query->result();
    }

    //read with slug
    public function read_slug($id = null)
    {
        $id= decrypt_url($id);
        return $this->db->get_where($this->table, array('id' => $id))->row();
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
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Event_model.php */
/* Location: ./application/models/Event_model.php */
