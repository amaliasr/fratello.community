<section id="team">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Our Team</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- team member item -->
					<?php
					$i = 0;
						$anggota = $this->m_global->tampil('anggota','id_anggota');
						// $anggota = $this->db->query("SELECT * FROM anggota
						// 								WHERE (SELECT anggota.* IS NULL)");
						
						foreach ($anggota as $key) {	
						if( $i == 3 ) break;			
					?>
					<div class="col-md-4">
						<div class="team-item">
							<div class="team-image" align="center">
								<br>
								<a href="<?=site_url('team/team_view/').$key->id_anggota;?>"><img style="width: auto ;height:200px" src="<?=base_url()?>upload/original/<?=$key->photo_profile;?>" alt="Project 1 image" class="img-circle underlay"></a>
							</div>
							<div class="team-text">
								<h3><?=$key->nama_anggota;?></h3>
								<p>Social Media<br>
								<a href="http://<?=$key->facebook;?>"><i class="fa fa-facebook-official fa-2x" aria-hidden="true" style="color: black"></i></a>
								<a href="http://<?=$key->twitter;?>"><i class="fa fa-twitter-square fa-2x" aria-hidden="true" style="color: black"></i></a>
								<a href="http://<?=$key->instagram;?>"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="color: black"></i></a>
								<a href="http://<?=$key->gmail;?>"><i class="fa fa-envelope fa-2x" aria-hidden="true" style="color: black"></i></a>
								</p>	
							</div>
						</div>
					</div>
					<?php
					$i++;
					} 
					?>					

					<!-- end team member item -->
				</div>
				<center>
					<a href="<?=site_url('team/team_list')?>"><button type="button" class="btn btn-default" style="background-color: black;color: white">View More</button></a>
				</center>
				
			</div>


		</section>