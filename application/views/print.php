<!DOCTYPE html>
<html>
<head>
	<title>CV</title>
	<!-- load bootstrap css file -->
	<!--link rel="stylesheet" type="text/css" href="<?php //echo base_url ('assets/css/bootstrap.min.css'); ?>"-->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>


		<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/all.css');?>" rel="stylesheet">
    

    <style>
      @media(min-width: 768px){
        .petunjuk,.panah{
          display:none;
        }
        .nama,.lahir{
          text-align:left !important;
        }
        .ornamen{
          height: 30px;
          background-color:#D8BFD8;
        }
        .menu{
          display:none;
        }
        .bulkir{
          position:relative;
          height: 15px;
          width: 15px;
          border-style:solid;
          border-width:7px;
          border-radius:180px;
          border-color:#D8BFD8;
          top:9px;
          left:-2px;
        }
        .garis{
          height:2px;
          background-color:#D8BFD8;
        }
        .bulkan{
          position:absolute;
          height: 15px;
          width: 15px;
          border-style:solid;
          border-width:7px;
          border-radius:180px;
          border-color:#D8BFD8;
          top:9px;
          right:9px;
        }
        div.foot{
          height:75px;
          display:inline-block
        }


      }


      @media(max-width:767.98px){

        html, body{
          height:100%;
        }
        .kepala{
          height:100vh;

        }
        .menu{
          overflow:auto;
          white-space:nowrap;
        }
        .karir{
          height:100vh;
          display:none;

        }
        .pendidikan{
          height:100vh;
          display:none;

        }
        .keahlian{
          height:100vh;
          display:none;
        }
        .kontak{
          height:100vh;
          display:none;
        }
        footer{
          display:none

        }
      }

 


    </style>
  </head>
  <body style="-webkit-print-color-adjust: exact;">
  <div class="container p-3 my-3">
    <header class="container-fluid bg-secondary kepala">
      <div class="row">
        <div class="col-md-2 text-center text-light border rounded m-2">
          <p class="m-2 mt-4">
            <i class="fas fa-file-alt fa-4x"></i>
          </p>
          <h1 class="lead mt-2">
            <b>Curriculum Vitae</b>
          </h1>
        </div>
        <div class="col-md-9 text-white bg-secondary">
          <h2 class="text-uppercase text-center nama mt-2">
          <?php echo $nm_lngkp;?>
          </h2>
          <p class="lead text-center lahir">
          <?php echo $tmpt_lhr;?>
          </p>
          
          <p class="mt-2 text-center panah">
            <i class="fas fa-arrow-down fa-2x "></i>
          </p>
        </div>
      </div>
    </header>

    <div class="ornamen bg-Thistle">

    </div>

    <div class="container-fluid badan">
      <div class="row karir mt-2">
        <h2 class="ml-4 text-secondary">
          <i class="fas fa-suitcase ml-2 mr-2" id="datapribadi"></i>Profil
        </h2>
        <div class="col-md-12">
          <div class="card-deck m-1">
            <div class="card border-secondary mb-3">
              <div class="card-header bg-secondary text-white">Biodata</div>
              <div class="card-body">
              <table>
                    <div class="form-group">
                        <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $nm_lngkp;?></td>
                        </tr>
                    </div>
                    <div class="form-group">
                    <tr>
                        <td>Nama Panggilan</td>
                        <td>:</td>
                        <td><?php echo $nm_pngln;?></td>
                    </tr>
                    </div>
                    <div class="form-group">
                    <tr></tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $jk;?></td>
                    </tr>
                    </div>
                    <div class="form-group">
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?php echo $agama;?></td>
                        </tr>
                    </div>
                    <div class="form-group">
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $alamat;?></td>
                        </tr>
                    </div>
                    <div class="form-group">
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?php echo $tmpt_lhr;?></td>
                        </tr>
					</div>
					<div class="form-group">
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?php echo $tgl_lahir;?></td>
                        </tr>
                    </div>
                    </table>
                    
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-md-12 mb-4">
          <div class="card-deck m-1">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12 mt-n5 ornamendua">
          <div class="bulkir">

          </div>
          <div class="garis">

          </div>
          <div class="bulkan">

          </div>
        </div>
      </div>


      <div class="row pendidikan mt-2">
        <h2 class="ml-4 text-secondary">
        <i class="fas fa-graduation-cap ml-2 mr-2" id="riwayat"></i>Pendidikan
        </h2>
        <div class="col-md-12 mb-4">
          <ul class="list-group list-group-horizontal-md mb-4 border-right-0 border-left-0 lgrup">
            <li class="list-group-item flex-fill border-right-0 border-left-0">
              <h4>SD </h4>
              <p class="m-0"><?php echo $sd;?> </p>
              <p class="badge badge-pill badge-secondary m-0"><small>Tahun <?php echo $thsd;?></small></p>
            </li>
            <li class="list-group-item flex-fill border-right-0 border-left-0">
              <h4>SMP</h4>
              <p class="m-0"><?php echo $smp;?>a</p>
              <p class="badge badge-pill badge-secondary m-0"><small>Tahun <?php echo $thsmp;?></small></p>
            </li>
            <li class="list-group-item flex-fill border-right-0 border-left-0">
              <h4>SMA/SMK</h4>
              <p class="m-0"><?php echo $sma;?></p>
              <p class="badge badge-pill badge-secondary m-0"><small>Tahun <?php echo $thsma;?></small></p>
            </li>
            <li class="list-group-item flex-fill border-right-0 border-left-0">
              <h4>Perguruan Tinggi</h4>
              <p class="m-0"><?php echo $kuliah;?></p>
              <p class="badge badge-pill badge-secondary m-0"><small>Tahun <?php echo $thkuliah;?></small></p>
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
       <div class="col-md-12 mt-n5 ornamendua">
         <div class="bulkir">

         </div>
         <div class="garis">

         </div>
         <div class="bulkan">
         </div>
       </div>
      </div>


      <div class="row keahlian mt-2 mb-3">
        <div class="col-md-12">
        <h2 class=" ml-3 text-secondary">
          <i class="fas fa-toolbox ml-2 mr-2"  id="keahlian"></i>Keahlian
        </h2>
        </div>


        <div class="col">
          <div class="media">
            <p class="align-self-center text-center mr-3 mt-0 mb-0">
            <div class="media-body">
              <p class="m-0 text-muted"><?php echo $ahli1;?></p>
              <div class="progress mb-2">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo $ukuran1;?>%" aria-valuenow="<?php echo $ukuran1;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $ukuran1;?></div>
              </div>

              <p class="m-0 text-muted"><?php echo $ahli2;?></p>
              <div class="progress mb-2">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo $ukuran2;?>%" aria-valuenow="<?php echo $ukuran2;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $ukuran2;?></div>
              </div>

              <p class="m-0 text-muted"><?php echo $ahli3;?></p>
              <div class="progress mb-2">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo $ukuran3;?>%" aria-valuenow="<?php echo $ukuran3;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $ukuran3;?></div>
              </div>

              <p class="m-0 text-muted"><?php echo $ahli4;?></p>
              <div class="progress mb-2">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: <?php echo $ukuran4;?>%" aria-valuenow="<?php echo $ukuran4;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $ukuran4;?></div>
              </div>
            </div>
          </div>
      </div>
    </div>

      <div class="row">
        <div class="col-md-12 mt-n4 mb-4 ornamendua">
         <div class="bulkir">
         </div>
         <div class="garis">
         </div>
         <div class="bulkan">
         </div>
        </div>
      </div>


      <div class="row mt-2 kontak mb-4">

        <h2 class="ml-4 text-secondary">
          <i class="fas fa-inbox ml-2 mr-2"id="contacts"></i>Kontak
        </h2>

        <div class="col-md-12">


          <ul class="list-group list-group-horizontal-md border-left-0 border-right-0">
            <li class="list-group-item flex-fill border-left-0 border-right-0">
              <p><i class="fas fa-mobile-alt ml-2 mr-2"></i><?php echo $no_hp;?></p>
              <p><i class="fab fa-whatsapp ml-2 mr-2"></i><?php echo $no_wa;?> </p>
            </li>
            <li class="list-group-item flex-fill border-left-0 border-right-0">
              <p><i class="fab fa-facebook mr-2"></i><?php echo $fb;?></p>
              <p><i class="fab fa-instagram mr-2"></i><?php echo $ig;?></p>
            </li>
            <li class="list-group-item flex-fill border-right-0 border-left-0"><i class="fas fa-mail-bulk mr-2"></i><?php echo $email;?></li>
          </ul>



        </div>
      </div>

    </div>
				<div class="container-fluid justify-content-center text-center maincreation2">
					<div class="row">
						<div class="col-12">
							<h6 class="fontitalic"> &copy; Copyright 2020 All Right Reserved. </h6>
						</div>
					</div>
				</div> 

	<!-- load bootstrap css file -->
	<script src="<?php echo base_url ('assets/js/jquery.min.js'); ?>"></script>
	<!-- load bootstrap css file -->
	<script src="<?php echo base_url ('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>