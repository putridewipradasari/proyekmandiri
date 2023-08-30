<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * dikembangkan oleh andhika putra pratama.
 */
class Home_model extends CI_Model
{
    public $table_lowongan = 'lowongan';
    public $table_event = 'event';
    public $table_group = 'users_groups';
    public $table_profil = 'profil';
    public $table_status = 'status_alumni';
    public $table_user = 'users';

    public $id = 'id';
    public $group_id = '2';
    //public $status = 'status';
    public $order = 'DESC';
    public $kuliah = 'Kuliah';
    public $bekerja = 'Bekerja';
    public $beku = 'Bekerja sambil kuliah';
    public $non = 'Belum / tidak bekerja';


    public function __construct()
    {
        parent::__construct();
    }

   

    public function count_alumni()
    {
        $this->db->where('group_id', $this->group_id);

        return $this->db->count_all_results($this->table_group);
    }

    public function count_kuliah()
    {
        $this->db->where('status', $this->kuliah);

        return $this->db->count_all_results($this->table_status);
    }
    public function count_bekerja()
    {
        $this->db->where('status', $this->bekerja);

        return $this->db->count_all_results($this->table_status);
    }
    public function count_beku()
    {
        $this->db->where('status', $this->beku);

        return $this->db->count_all_results($this->table_status);
    }
    public function count_non()
    {
        $this->db->where('status', $this->non);

        return $this->db->count_all_results($this->table_status);
    }

}
