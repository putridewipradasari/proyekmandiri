select email from users join profil on users.id = profil.id_user join users_groups on profil.id_user = users_groups.user_id where ekskul = 'osis'

nynitatriyani10@gmail.com
sriayulestari824@gmail.com
pumkelompokdua@gmail.com


<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Event_model' => 'event'));
       
    }

    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } elseif (!$this->ion_auth->in_group(2)) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            return show_error('Anda tidak punya akses di halaman ini');
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->data['_get_event'] = $this->event->read_per_month();
            if(!isset($this->data['_get_event'])||empty($this->data['_get_event'])){
                $this->session->set_flashdata('message','Tidak ada Info Kegiatan bulan Ini!');
            }
            $this->data['is_user'] = $this->ion_auth->user()->row();

            $this->data['_view'] = 'event_list';
            $this->template->_render_page('backend', $this->data);
        }
    }

    public function list_admin()
    {
        if (!$this->ion_auth->logged_in() || /*(!$this->ion_auth->is_admin()*/(!$this->ion_auth->is_osis()) ) {
            redirect('auth', 'refresh');
        }
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
        $this->data['is_user'] = $this->ion_auth->user()->row();
        $this->data['_get_event'] = $this->event->get_all();
        

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
        $this->data['_view'] = 'event_admin_list';
        $this->template->_render_page('backend', $this->data);
    }

    public function read($slug)
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            $this->data['is_user'] = $this->ion_auth->user()->row();

            $row = $this->event->read_slug($slug);
            if ($row) {
                $this->data['id'] = $this->form_validation->set_value('id', $row->id);
                $this->data['nama_event'] = $this->form_validation->set_value('nama_event', $row->nama_event);
                $this->data['event_title'] = $this->form_validation->set_value('event_title', $row->event_title);
                $this->data['event_slug'] = $this->form_validation->set_value('event_slug', $row->event_slug);
                $this->data['deskripsi'] = $this->form_validation->set_value('deskripsi', $row->deskripsi);
                $this->data['ekskul'] = $this->form_validation->set_value('ekskul', $row->ekskul);
                $this->data['tanggal_acara'] = $this->form_validation->set_value('tanggal_acara', $row->tanggal_acara);
                $this->data['tanggal_posting'] = $this->form_validation->set_value('tanggal_posting', $row->tanggal_posting);
                
                $this->data['berkas'] = $this->form_validation->set_value('berkas', $row->berkas);

                $this->data['title'] = humanize(implode(' | ', array($this->template->set_app_name(), $row->event_title)));
                $this->data['_view'] = 'event_read';
                $this->template->_render_page('backend', $this->data);
            } else {
                $this->session->set_flashdata('message','Data tidak ditemukan');
                redirect(site_url('event/list_admin'));
            }
        }
    }

    public function create()
    {
        if (!$this->ion_auth->logged_in() || /*(!$this->ion_auth->is_admin()*/(!$this->ion_auth->is_osis())) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            $this->data['is_user'] = $this->ion_auth->user()->row();

            $this->data['button'] = 'kirim';
            $this->data['action'] = site_url('event/tambah_aksi');
            $this->data['id'] = array(
                'name' => 'id',
                'type' => 'hidden',
                'value' => $this->form_validation->set_value('id'),
                'class' => 'form-control',
            );
            $this->data['nama_event'] = array(
                'name' => 'nama_event',
                'type' => 'text',
                'value' => $this->form_validation->set_value('nama_event'),
                'class' => 'form-control',
            );
            $this->data['event_title'] = array(
                'name' => 'event_title',
                'type' => 'text',
                'value' => $this->form_validation->set_value('event_title'),
                'class' => 'form-control',
            );
            $this->data['deskripsi'] = array(
                'name' => 'deskripsi',
                'type' => 'text',
                'value' => $this->form_validation->set_value('deskripsi'),
                'class' => 'form-control',
            );

            $this->data['ekskul'] = array(
                'name' => 'ekskul',
                'type' => 'text',
                'value' => $this->form_validation->set_value('ekskul'),
                'class' => 'form-control',
                'required' => 'required',
                'data-live-search' => 'true',
            );

            $this->data['tanggal_acara'] = array(
                'name' => 'tanggal_acara',
                'type' => 'date',
                'value' => $this->form_validation->set_value('tanggal_acara'),
                'class' => 'form-control',
                'required' => 'required',
            );

            $this->data['berkas'] = array(
                'name' => 'berkas',
                'type' => 'file',
                'id'    => 'berkas',
                'value' => $this->form_validation->set_value('berkas'),
                'class' => 'form-control',
            );
            $this->data['_ref_ekskul'] = $this->event->get_ref_ekskul();

            $this->data['_partial_css'] = '<!-- Bootstrap Select Css -->
            <link href="'.base_url('assets/backend').'/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />';
            $this->data['_partial_js'] = '<!-- Select Plugin Js -->
            <script src="'.base_url('assets/backend').'/plugins/bootstrap-select/js/bootstrap-select.js"></script>';


            
            $this->data['_view'] = 'event_form';
            $this->template->_render_page('backend', $this->data);
        }
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->create();
        } else {
                    /*$config['upload_path']          = './upload/';
                    $config['allowed_types']        = 'pdf|jpg|png';
                    $config['max_size']             = 2048;*/

                    //$this->load->library('upload', $config);

                    //if (!$this->upload->do_upload('berkas')) {

                    //    echo "gagal upload";
                        //$error = array('error' => $this->upload->display_errors());
                        //$this->load->view('event_form', $error);

                    //} else {
                        //$upload_data = $this->upload->data();
                        //print_r($upload_data);
                        /*$data = array(
                            'nama_event' => $this->input->post('nama_event', true),
                            'event_title' => $this->input->post('event_title', true),
                            'event_slug' => slug($this->input->post('event_title', true)),
                            'deskripsi' => $this->input->post('deskripsi', true),
                            'ekskul' => $this->input->post('ekskul', true),
                            'tanggal_acara' => $this->input->post('tanggal_acara', true),
                            'berkas' => $upload_data["file_name"]
                        );
                        */

                        //$this->data['_ref_email'] = $this->event->get_ref_email($ekskul);
                        $this->load->library('mailer');

                        
                        //$get_ref_email = $this->input->post('get_ref_email');
                        $ekskul = $this->input->post('ekskul');
                        $event_title = $this->input->post('event_title'); //$this->input->post('subjek');
                        $deskripsi = $this->input->post('deskripsi'); //$this->input->post('pesan');
                        $berkas = $_FILES['berkas'];
                        //$content = $this->load->view('event_list', array('deskripsi'=>$deskripsi), true); // Ambil isi file content.php dan masukan ke variabel $content
                        $sql = $this->db->query("SELECT email FROM `users` JOIN `profil` ON users.id = profil.id_user JOIN `users_groups` ON profil.id_user = users_groups.user_id WHERE ekskul = '$ekskul'");
                        //$this->db->query($sql);
                        //print_r ($sql);
                        //echo $sql;

                        foreach ($sql->result() as $email_penerima)
                        {
                                //echo $email_penerima->email;
                                //echo ', ';
                        

                        $data = array(
                        'email_penerima'=>$email_penerima->email,
                        'event_title'=>$event_title,
                        'deskripsi'=>$deskripsi,
                        'berkas'=>$berkas
                        );
                        
                        //print_r ($data);
                    
                        if(empty($berkas['name'])){ // Jika tanpa attachment
                            
                        $send = $this->mailer->send($data); // Panggil fungsi send yang ada di librari Mailer
                        }else{ // Jika dengan attachment
                            //if(is_array($sql)){
                            //foreach($sql as $email_penerima)
                            //{
                        $send = $this->mailer->send_with_attachment($data); // Panggil fungsi send_with_attachment yang ada di librari Mailer
                        }
                    
                    
                        
                        echo "<b>".$send['status']."</b><br />";
                        echo $send['message'];
                        echo "<br /><a href='".base_url("event/create")."'>Kembali ke Form</a>";
                    //}*/
                        //$this->event->insert($data);

                       // $this->session->set_flashdata('message','Data berhasil ditambahkan');
                        //redirect(site_url('event/create'));
                }}
            }
        
            

    public function update($id)
    {
        if (!$this->ion_auth->logged_in() || /*(!$this->ion_auth->is_admin()*/(!$this->ion_auth->is_osis())) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            
            $this->data['_ref_ekskul'] = $this->event->get_ref_ekskul();

            $this->data['is_user'] = $this->ion_auth->user()->row();

            $row = $this->event->get_by_id($id);

            if ($row) {
                $this->data['button'] = 'Ubah';
                $this->data['action'] = site_url('event/ubah_aksi');
                $this->data['id'] = array(
                    'name' => 'id',
                    'type' => 'hidden',
                    'value' => $this->form_validation->set_value('id', $row->id),
                    'class' => 'form-control',
                );
                $this->data['nama_event'] = array(
                    'name' => 'nama_event',
                    'type' => 'text',
                    'value' => $this->form_validation->set_value('nama_event', $row->nama_event),
                    'class' => 'form-control',
                );
                $this->data['event_title'] = array(
                    'name' => 'event_title',
                    'type' => 'text',
                    'value' => $this->form_validation->set_value('event_title', $row->event_title),
                    'class' => 'form-control',
                );
                $this->data['deskripsi'] = array(
                    'name' => 'deskripsi',
                    'type' => 'text',
                    'value' => $this->form_validation->set_value('deskripsi', $row->deskripsi),
                    'class' => 'form-control',
                );
                
                $this->data['ekskul'] = array(
                    'name' => 'ekskul',
                    'type' => 'text',
                    'value' => $this->form_validation->set_value('ekskul', $row->ekskul),
                    'class' => 'form-control',
                    'required' => 'required',
                    'data-live-search' => 'true',
                );

                $this->data['tanggal_acara'] = array(
                    'name' => 'tanggal_acara',
                    'type' => 'date',
                    'value' => $this->form_validation->set_value('tanggal_acara',$row->tanggal_acara),
                    'class' => 'form-control',
                    'required' => 'required',
                );
                $this->data['berkas'] = array(
                    'name' => 'berkas',
                    'type' => 'file',
                    'value' => $this->form_validation->set_value('berkas'),
                    'class' => 'form-control',
                );

                $this->data['_view'] = 'event_form';
                $this->template->_render_page('backend', $this->data);
            } else {
                $this->session->set_flashdata('message','Data Tidak Ditemukan');
                redirect(site_url('event/list_admin'));
            }
        }
    }

    public function ubah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->update($this->input->post('id', true));
        } else {
            /*$data = array(
            'nama_event' => $this->input->post('nama_event', true),
            'event_title' => $this->input->post('event_title', true),
            'event_slug' => slug($this->input->post('event_title', true)),
            'deskripsi' => $this->input->post('deskripsi', true),
            'ekskul' => $this->input->post('ekskul', true),
            'tanggal_acara' => $this->input->post('tanggal_acara', true),
            'berkas' => $this->input->post('berkas', true),
        );*/
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'pdf|jpg|png';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('berkas')) {
            echo "gagal upload";
            } else {
                $upload_data = $this->upload->data();
                $data = array(
                    'nama_event' => $this->input->post('nama_event', true),
                    'event_title' => $this->input->post('event_title', true),
                    'event_slug' => slug($this->input->post('event_title', true)),
                    'deskripsi' => $this->input->post('deskripsi', true),
                    'ekskul' => $this->input->post('ekskul', true),
                    'tanggal_acara' => $this->input->post('tanggal_acara', true),
                    'berkas' => $upload_data["file_name"]
                        );

            $this->event->update($this->input->post('id', true), $data);
            $this->session->set_flashdata('message','Data berhasil di ubah');
            redirect(site_url('event/list_admin'));
        }
    }
    }

    public function delete($id)
    {
        $row = $this->event->get_by_id($id);

        if ($row) {
            $this->event->delete($id);
            $this->session->set_flashdata('message','Hapus data berhasil');
            redirect(site_url('event/list_admin'));
        } else {
            $this->session->set_flashdata('message','Data tidak ditemukan');
            redirect(site_url('event/list_admin'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_event', 'nama event', 'trim|required');
        $this->form_validation->set_rules('event_title', 'event title', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
        $this->form_validation->set_rules('ekskul', 'organisasi', 'trim|required');
        $this->form_validation->set_rules('tanggal_acara', 'tanggal acara', 'trim|required');
       // $this->form_validation->set_rules('berkas', 'berkas', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

      public function email(){
        $this->load->view('email');
        //$this->data['_view'] = 'email';
      }
    
      public function send(){
        $this->load->library('mailer');
    
        $email_penerima = $this->input->post('email_penerima');
        $subjek = $this->input->post('subjek');
        $pesan = $this->input->post('pesan');
        $attachment = $_FILES['attachment'];
        $content = $this->load->view('content', array('pesan'=>$pesan), true); // Ambil isi file content.php dan masukan ke variabel $content
        $sendmail = array(
          'email_penerima'=>$email_penerima,
          'subjek'=>$subjek,
          'content'=>$content,
          'attachment'=>$attachment
        );
    
        if(empty($attachment['name'])){ // Jika tanpa attachment
          $send = $this->mailer->send($sendmail); // Panggil fungsi send yang ada di librari Mailer
        }else{ // Jika dengan attachment
          $send = $this->mailer->send_with_attachment($sendmail); // Panggil fungsi send_with_attachment yang ada di librari Mailer
        }
    
        echo "<b>".$send['status']."</b><br />";
        echo $send['message'];
        echo "<br /><a href='".base_url("email")."'>Kembali ke Form</a>";
      }
    

}

/* End of file Event.php */
/* Location: ./application/controllers/Event.php */

