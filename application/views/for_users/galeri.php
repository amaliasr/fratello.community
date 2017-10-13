		<section id="galeri" class="mz-module">
			<div class="container" >
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Social Community<br><b><font >&nbspFratello.&nbsp</font></b></h2>
					
						<p style="line-height: 100%">Komunitas yang bergerak dibidang sosial tanpa batas untuk membantu masyarakat disekitar kita yang membutuhkan. Tidak ada kata berhenti untuk berbagi. Ayo bergerak dan ulurkan tangan kita untuk mereka</p>
					</div>
				</div>
			</div>
			<?php 
				$blog = $this->db->query("SELECT * FROM blog LIMIT 4")->result();;
				$a = 0;
				foreach ($blog as $key) {
					if ($a%2==0) {
						$x1[] = $key;
					}elseif($a%2==1) {
						$x2[] = $key;
					}
				$a++;
				}
			?>
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<?php foreach ($x1 as $key) { ?>
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="<?=base_url()?>upload/original/<?=$key->photo;?>" alt="img02" class="img-responsive" />
							<figcaption>
								<h2><?=$key->title;?></h2>
								<p></p>
								<a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<?php } ?>
				<!-- end portfolio item -->
			</div>
			
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<?php foreach ($x2 as $key) { ?>
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="<?=base_url()?>upload/original/<?=$key->photo;?>" alt="img02" class="img-responsive" />
							<figcaption>
								<h2><?=$key->title;?></h2>
								<p></p>
								<a href="#" data-toggle="modal" data-target="#Modal-3">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<?php } ?>
				<!-- end portfolio item -->
			</div>
			
			</div><!-- container -->

		</section>
		<!-- <center>
			<a href="<?=site_url('home/view_more_blog')?>"
				><button type="button" class="btn btn-default" style="background-color: black;color: white">View More</button>
			</a>
		</center> -->