<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model(array('Testimoni_model' => 'testimoni', 'Lowongan_model' => 'lowongan', 'Event_model' => 'event', 'Home_model' => 'home', 'Profil_model' => 'profil'));
    }

    public function index()
    {
        //$this->data['_get_is_tampil'] = $this->testimoni->get_is_tampil();
        $this->data['_view'] = 'mainpage';
        $this->template->_render_page('frontend', $this->data);
    }

   
}
