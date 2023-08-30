<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Andhika Putra Pratama">
    <!-- Favicon-->
    <link rel="icon" href="http://localhost/nama_web/assets/favicon.ico" type="image/x-icon">

    <title>Sistem Informasi Alumni | Create</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="http://localhost/nama_web/assets/backend/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="http://localhost/nama_web/assets/backend/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="http://localhost/nama_web/assets/backend/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="http://localhost/nama_web/assets/backend/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="http://localhost/nama_web/assets/backend/css/themes/all-themes.css" rel="stylesheet" />

        
    <script type="text/javascript">
            function showTime() {
                var a_p = "";
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();
                if (curr_hour < 12) {
                    a_p = "AM";
                } else {
                    a_p = "PM";
                }
                if (curr_hour == 0) {
                    curr_hour = 12;
                }
                if (curr_hour > 12) {
                    curr_hour = curr_hour - 12;
                }
                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);
                document.getElementById('time').innerHTML=" "+ curr_hour + ":" + curr_minute +  a_p;
            }
             
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
            setInterval(showTime, 500);         
        </script>
</head>

<body class="theme-teal">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-teal">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="home">Sistem Informasi Alumni</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->  
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="http://localhost/nama_web/assets/backend/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
                    <div class="email">admin@admin.com</div>
                                      
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                                </li>
                    <li class="active">
                        <a href="http://localhost/pum1/osis"><i class="material-icons">event</i><span>event</span></a>                    </li>
                    
                                        <li >
                        <a href="http://localhost/nama_web/auth/change_password"><i class="material-icons">lock</i><span>Ganti Kata Sandi</span></a>                    </li>    
                                        <li >
                        <a href="http://localhost/nama_web/auth/logout"><i class="material-icons">input</i><span>Keluar</span></a>                    </li> 
                       
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Andhika Putra Pratama</a>.
                </div>
                <div class="version">
                    <b>Version: </b> beta
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
       
    </section>
    
     
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Event</h2>
            </div>
			            <!-- Basic Alerts -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Silakan masukan data Event di bawah ini.
                            </h2>
                            
                        </div>
                        <div class="body">
						<form action="http://localhost/nama_web/event/tambah_aksi" class = "form-horizontal" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="5f3f8c8cbb90554a0f34afff58a3eac6" />       
						  <div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label>Nama Kegiatan</label>								</div>
						  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
									<input type="text" name="nama_event" value="" class="form-control"  />
								 	</div>
								</div>
							</div>
						</div>
						  <div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label>Judul kegiatan</label>								</div>
						  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
									<input type="text" name="event_title" value="" class="form-control"  />
								 	</div>
								</div>
							</div>
						</div>
					  <div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
								<label>Deskripsi</label>							</div>
					 <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
								<div class="form-group">
									<div class="form-line">
									<textarea name="deskripsi" cols="40" rows="10" type="text" class="form-control" ></textarea>
									</div>
								</div>
							</div>
						</div>
					    <input type="hidden" name="id" value="" class="form-control"  />
					    	
								<div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" name="submit" value="Tambah"  class="btn btn-flat btn-primary" />
<a href="http://localhost/nama_web/event/list_admin" class="btn btn-flat btn-default">Batal</a>                                </div>
                                </div>
						</form>						</div>
					</div>
				</div>
            <!-- #END# Basic Alerts -->
		</div>
	</section>
     

    <!-- Jquery Core Js -->
    <script src="http://localhost/nama_web/assets/backend/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="http://localhost/nama_web/assets/backend/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="http://localhost/nama_web/assets/backend/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="http://localhost/nama_web/assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="http://localhost/nama_web/assets/backend/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="http://localhost/nama_web/assets/backend/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="http://localhost/nama_web/assets/backend/js/demo.js"></script>

    </body>
<script>
	$(document).ready(function () {
		$("#flash-msg").delay(2000).fadeOut("slow");

        
    });
</script>
</html>