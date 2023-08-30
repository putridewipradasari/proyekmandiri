<?php
class biodatamhs extends CI_Controller {
    function index()
    {
        $this->load->view('vw_form');
    }
    function save()
    {
        $this->load->view('vw_biodata');
    }
}