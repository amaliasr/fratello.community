<div class="modal fade" id="Modal-7" tabindex="-1" role="dialog" aria-labelledby="Modal-label-7">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="Modal-label-7">Blog</h4>
					</div>
					<div class="modal-body" id="padd">
						<div class="row">
							
						</div>
						<div class="row">
					<!-- team member item -->
					<?php foreach ($tampil as $key) { ?>
					<div class="col-md-4">

						<div class="team-item" style="padding-bottom: 1px">
							<div class="team-image" align="center">
								<br>
								<img style="width: 70px ;height:70px" src="upload/original/<?=$key->photo_profile;?>" alt="Project 1 image" class="img-circle underlay">
							</div>
							<div class="team-text">
								<h5><?=$key->nama_anggota;?></h5>
								
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- end team member item -->

					
				</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>