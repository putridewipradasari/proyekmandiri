		
		<div class="bg"></div>
		<div class="title">
			<span class="subtitle  black-text"><h2 data-aos="fade-down">APLIKASI PENDATAAN ALUMNI</h2></span><br>
			<?php echo anchor('auth/login', 'Login', 'class="waves-effect waves-light btn-large teal accent-4" data-aos="fade-left"'); ?>
		</div>
		<div class="container"> 
			<div class="row">			
				<!--a id="testimoni" class="line"><h4 class="margin h1" data-aos="zoom-out" data-aos-duration="500">Testimoni Alumni</h4></a-->
				
				<!-- Slideshow container -->
				<div class="slideshow-container" data-aos="zoom-in-down" data-aos-duration="500">

				<!-- Full-width slides/quotes -->
				<?php /*foreach ($_get_is_tampil as $row) :?>
				<div class="mySlides" data-aos="zoom-in-down" data-aos-duration="500">
				<q class="light justify" data-aos="zoom-in-down" data-aos-duration="500"><?php echo $row->testimoni; ?></q>
				<p class="author" data-aos="zoom-in-down" data-aos-duration="500"><?php echo ucfirst($row->first_name); ?> <?php echo ucfirst($row->last_name); ?>- Alumni <?php echo $row->tahun_lulus; ?></p>
				</div>
				<?php endforeach; */?>


				<!-- Next/prev buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>

				<!-- Dots/bullets/indicators -->
				

				
			</div>
		</div>
		
</div>