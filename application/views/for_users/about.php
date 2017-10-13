<section id="about" class="mz-module">
			<div class="container light-bg">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>ABOUT</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-justify">
						<div class="mz-about-container">
							<p>Ada setitik cahaya yang menjadi harapan kita bersama, ketika naluri kesadaran kita tergerak untuk melakukan amal nyata, dengan berbagi terhadap sesama maka kitapun dapat saksikan tidak saja para tokoh dan pemuka agama, para cendikiawan, profesional, mahasiswa, pejabat pemerintah bahkan para pengusahapun saat ini telah semakin menyadari hak orang lain dan ia merasa harus memberikannya kepada yang berhak menerimanya</p><br>
						</div>
					</div>
					<div class="col-md-6 text-justify">
						<div class="mz-about-container">
							<!-- <img src="<?=base_url()?>assets/images/gambar/e.jpg" class="img-responsive" alt="Image"> -->
							
						</div>
						
						<div class="slider" id="slider1">
							    <!-- Slides -->
							    <?php
								$galery = $this->m_global->tampil('galery','id_galery');
								// $anggota = $this->db->query("SELECT * FROM anggota
								// 								WHERE (SELECT anggota.* IS NULL)");
								foreach ($galery as $key) {				
								?>
								<!-- <img src="<?=base_url()?>upload/original/<?=$key->nama;?>"> -->
								<div style="background-image:url('<?=base_url()?>upload/original/<?=$key->nama;?>')"></div>
							    <!-- <div style="background-image:url(https://unsplash.it/1920/1200?image=839)"></div>
							    <div style="background-image:url(https://unsplash.it/1920/1200?image=838)"></div>
							    <div style="background-image:url(https://unsplash.it/1920/1200?image=836)"></div>
							    <div style="background-image:url(https://unsplash.it/1920/1200?image=826)"></div>
							    <div style="background-image:url(https://unsplash.it/1920/1200?image=822)"></div> -->
							    <?php
								} 
								?>
							    <!-- The Arrows -->
							    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
							    <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
							    <!-- Title Bar -->
							</div>
							
							<br>
					</div>
					
				</div>

				<!-- <div class="row row-0-gutter">
					about module
					<div class="col-md-3 col-0-gutter mz-about-default text-center">
						<div class="mz-module-about">
							<i class="fa fa-share ot-circle"></i>
							<h3>Share to People</h3>
						</div>
					</div>
					end about module
					about module
					<div class="col-md-3 col-0-gutter mz-about-dark text-center">
						<div class="mz-module-about">
							<i class="fa fa-globe ot-circle"></i>
							<h3>Online</h3>
						</div>
					</div>
					end about module
					about module
					<div class="col-md-3 col-0-gutter mz-about-default text-center">
						<div class="mz-module-about">
							<i class="fa fa-commenting ot-circle"></i>
							<h3>Meet Other</h3>
						</div>
					</div>
					end about module
					about module
					<div class="col-md-3 col-0-gutter mz-about-dark text-center">
						<div class="mz-module-about">
							<i class="fa fa-smile-o ot-circle"></i>
							<h3>Always Happy</h3>
						</div>
					</div>
					end about module
				</div> -->
			</div>
			<!-- /.container -->
		</section>