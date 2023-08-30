<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Referensi_ekskul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Referensi_ekskul_model' => 'ekskul'));
    }

    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Anda tidak punya akses di halaman ini');
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->data['is_user'] = $this->ion_auth->user()->row();
            //partial datatable
            $this->data['_partial_css'] = '<!-- JQuery DataTable Css -->
            <link href="'.base_url('assets/backend').'/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">';
            $this->data['_partial_js'] = '<!-- Jquery DataTable Plugin Js -->
            <script src="'.base_url('assets/backend').'/plugins/jquery-datatable/jquery.dataTables.js"></script>
            <script src="'.base_url('assets/backend').'/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
            <script src="'.base_url('assets/backend').'/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
            <script src="'.base_url('assets/backend').'/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
            <script src="'.base_url('assets/backend').'/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
            <script src="'.base_url('assets/backend').'/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
            <script src="'.base_url('assets/backend').'/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
            <script src="'.base_url('assets/backend').'/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
            <script src="'.base_url('assets/backend').'/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
            <!-- Custom Js -->
            <script src="'.base_url('assets/backend').'/js/pages/tables/jquery-datatable.js"></script>
            ';
            //end partial
            $this->data['_get_ref'] = $this->ekskul->get_all();
            $this->data['_view'] = 'referensi_ekskul_list';
            $this->template->_render_page('backend', $this->data);
            //echo json_encode($this->data['_get_ref']);
        }
    }

    public function tambah_data()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Anda tidak punya akses di halaman ini');
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['is_user'] = $this->ion_auth->user()->row();

            $this->data['button'] = 'Tambah';
            $this->data['action'] = site_url('referensi_ekskul/tambah_data_aksi');
            $this->data['id'] = array(
                'name' => 'id',
                'type' => 'hidden',
                'value' => $this->form_validation->set_value('id'),
            );
            $this->data['nm_ekskul'] = array(
                'name' => 'nm_ekskul',
                'type' => 'text',
                'value' => $this->form_validation->set_value('nm_ekskul'),
                'class' => 'form-control',
            );

            $this->data['_view'] = 'referensi_ekskul_form';
            $this->template->_render_page('backend', $this->data);
        }
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->tambah_data();
        } else {
            $data = array(
            'nm_ekskul' => $this->input->post('nm_ekskul', true),
            );

            $this->ekskul->insert($data);
            $this->session->set_flashdata('message','Data berhasil ditambahkan');
            redirect(site_url('referensi_ekskul'));
        }
    }

    public function ubah_data($id)
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Anda tidak punya akses di halaman ini');
        } else {
            $this->data['is_user'] = $this->ion_auth->user()->row();

            $row = $this->ekskul->get_by_id($id);

            if ($row) {
                $this->data['button'] = 'Ubah';
                $this->data['action'] = site_url('referensi_ekskul/ubah_data_aksi');
                $this->data['id'] = array(
                    'name' => 'id',
                    'type' => 'hidden',
                    'value' => $this->form_validation->set_value('id', $row->id),
                );
                $this->data['nm_ekskul'] = array(
                    'name' => 'nm_ekskul',
                    'type' => 'text',
                    'value' => $this->form_validation->set_value('nm_ekskul', $row->nm_ekskul),
                    'class' => 'form-control',
                );

                $this->data['_view'] = 'referensi_ekskul_form';
                $this->template->_render_page('backend', $this->data);
            } else {
                $this->session->set_flashdata('message','Data Tidak Ditemukan');
                redirect(site_url('referensi_ekskul'));
            }
        }
    }

    public function ubah_data_aksi()
    {
        $id= decrypt_url($id);
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->ubah_data($this->input->post('id', true));
        } else {
            $data = array(
                'nm_ekskul' => $this->input->post('nm_ekskul', true),
            );

            $this->ekskul->update($this->input->post('id', true), $data);
            $this->session->set_flashdata('message','Data berhasil di ubah');
            redirect(site_url('referensi_ekskul'));
        }
    }
    public function delete($id)
    {
        $row = $this->ekskul->get_by_id($id);

        if ($row) {
            $this->ekskul->delete($id);
            $this->session->set_flashdata('message', 'Hapus data berhasil');
            redirect(site_url('referensi_ekskul'));
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('referensi_ekskul'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nm_ekskul', 'nama ekskul', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file referensi_ekskul.php */
/* Location: ./application/controllers/referensi_ekskul.php */
