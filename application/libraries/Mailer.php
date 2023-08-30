<?php defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    protected $_ci;
    protected $email_pengirim = 'agusrizky321@gmail.com'; // Isikan dengan email pengirim
    protected $nama_pengirim = 'Rizky Agusetiawan'; // Isikan dengan nama pengirim
    protected $password = 'yfjrggwhiayxeteh'; // Isikan dengan password email pengirim

    public function __construct(){
        $this->_ci = &get_instance(); // Set variabel _ci dengan Fungsi2-fungsi dari Codeigniter

        require_once(APPPATH.'third_party\phpmailer\Exception.php');
        require_once(APPPATH.'third_party\phpmailer\PHPMailer.php');
        require_once(APPPATH.'third_party\phpmailer\SMTP.php');
    }

    public function send($data){

            //if(is_array($data['sql'])){
               // foreach(($data['sql']) as $email_penerima){
        $mail = new PHPMailer;
        $mail->isSMTP();

        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $this->email_pengirim; // Email Pengirim
        $mail->Password = $this->password; // Isikan dengan Password email pengirim
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        //$mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

        $mail->setFrom($this->email_pengirim, $this->nama_pengirim);
        $mail->addAddress($data['email_penerima'], '');
        $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html

        $mail->Subject = $data['event_title'];
        $mail->Body = $data['deskripsi'];
        //$mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
                
        $send = $mail->send();
                
        if($send){ // Jika Email berhasil dikirim
            $response = array('status'=>'Sukses', 'message'=>'Email berhasil dikirim');
        }else{ // Jika Email Gagal dikirim
            $response = array('status'=>'Gagal', 'message'=>'Email gagal dikirim');
        }

        return $response;
    }//}}


    public function send_with_attachment($data){
        //if(is_array($data['sql'])){
         //   foreach($data['sql'] as $email => $email_penerima)
            //foreach($sql->result() as $email_penerima)
         //   {
        
        $mail = new PHPMailer;
        $mail->isSMTP();

        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $this->email_pengirim; // Email Pengirim
        $mail->Password = $this->password; // Isikan dengan Password email pengirim
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

        $mail->setFrom($this->email_pengirim, $this->nama_pengirim);
        $mail->addAddress($data['email_penerima'], '');
        $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html

        $mail->Subject = $data['event_title'];
        $mail->Body = $data['deskripsi'];
        //$mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email

        if($data['berkas']['size'] <= 25000000){ // Jika ukuran file <= 25 MB (25.000.000 bytes)
            $mail->addAttachment($data['berkas']['tmp_name'], $data['berkas']['name']);

            $send = $mail->send();

            if($send){ // Jika Email berhasil dikirim
                $response = array('status'=>'Sukses', 'message'=>'Email berhasil dikirim');
            }else{ // Jika Email Gagal dikirim
                $response = array('status'=>'Gagal', 'message'=>'Email gagal dikirim');
            }
        }else{ // Jika Ukuran file lebih dari 25 MB
            $response = array('status'=>'Gagal', 'message'=>'Ukuran file berkas maksimal 25 MB');
        }

        return $response;
    }
}
//}}