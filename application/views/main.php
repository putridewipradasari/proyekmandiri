<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Home</h2>
        </div>
        <?php if (isset($message)) {
    echo '<div class="alert bg-teal alert-dismissible" role="alert" id="flash-msg">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					'.$message.'
			    </div>';
}?>
    
    <div class="row">
    <?php if ($this->ion_auth->is_admin()) {
        ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL ALUMNI</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"><?php echo $count_alumni; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL ALUMNI KULIAH</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"><?php echo $count_kuliah; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL ALUMNI BEKERJA</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"><?php echo $count_bekerja; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="">TOTAL ALUMNI BEKERJA SAMBIL KULIAH</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"><?php echo $count_beku; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-grey hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="">TOTAL ALUMNI BELUM / TIDAK BEKERJA</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"><?php echo $count_non; ?></div>
                        </div>
                    </div>
                </div>
                <?php
    } ?>
                <div class="col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-teal">today</i>
                        </div>
                        <div class="content">
                            <div class="text">HARI & TANGGAL SEKARANG</div>                            
                            <div class="number" id="date"></div>
                            <script>
                                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                var date = new Date();
                                var weekday = new Array(7);
                                weekday[0] = "Minggu";
                                weekday[1] = "Senin";
                                weekday[2] = "Selasa";
                                weekday[3] = "Rabu";
                                weekday[4] = "Kamis";
                                weekday[5] = "Jum'at";
                                weekday[6] = "Sabtu";

                                var nowadays = weekday[date.getDay()];
                                var day = date.getDate();
                                var month = date.getMonth();
                                var year = date.getFullYear();
                                
                                document.getElementById("date").innerHTML =" " + nowadays + ", " + day + " " + months[month] + " " + year ;
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-light-blue">access_time</i>
                        </div>
                        <div class="content">
                            <div class="text">WAKTU SEKARANG</div>                            
                            <div class="number" id="time"></div>
                            
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Hai, Selamat datang <?php echo humanize($is_user->first_name);?>!
                            </h2>                            
                        </div>
                        <div class="body">
                            <p class="lead">
                                Anda saat ini sedang berada di halaman <i><?php echo humanize($group);?>..</i>
                            </p> 
                            <p>
                                Segala aktifitas yang anda lakukan akan kami pantau, mohon gunakan aplikasi ini dengan bijaksana.
                            </p>  
                            <p>
                            Dengan adanya aplikasi ini kami berharap agar alumni yang ada dapat kami tracking keberadaannya, 
                            sehingga ada feedback antara pihak sekolah dan alumni yang ada. Keberadaan Alumni merupakan asset yang sangat penting, 
                            mengingat almamater dengan alumni tidak bisa dipisahkan dalam hal berkomunikasi dan menjalin silaturahmi.
                            Terima kasih atas segala bentuk kerjasama yang telah dilakukan dengan kami.
                            </p>  
                            <p class ="right"><i>
                            Hormat kami,                
                            Administrator.
                            </i>
                            </p>  
                            
                                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</section>
    