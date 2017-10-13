<?php $this->load->view('for_admin/header'); ?>
			<div class="container light-bg">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Admin</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center">
						<div class="mz-about-container">
							<div class="table-responsive">
				                  <table class="table table-hover">
				                    <thead>
				                      <tr>
				                          <th>No</th>
				                          <th>Link</th>
				                          <th>Aksi</th>
				                      </tr>
				                    </thead>
				                    <tbody>
				                        <?php $no=1; foreach ($tampil as $key) { ?>	
				                        <tr>
				                          <td align="left"><?=$no++;?></td>
				                          <td align="left"><?=$key->link_sosmed?></td>
				                          <td align="left">
				                              <a href="<?=site_url('admin/anggota_link_delete/').$key->id_sosmed;?>"><span class="glyphicon glyphicon-trash"></span></a>
				                          </td>
				                        </tr>
				                        <?php } ?>
				                      </tbody>
				                  </table>
				              </div>
						
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<form action="<?=site_url('admin/anggota_link_processingAdd/').$id_anggota?>" method="POST" role="form">
								<div class="row">
								<div class="col-md-8">
									<br>
									<div class="form-group">
										<select name="icon" id="input" class="form-control" required="required">
											<?php foreach ($icon as $key) { ?>
												<option value="<?=$key->id_icon?>"><?=$key->nama_icon?></option>
											<?php } ?>
										</select>
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="text" name="link" class="form-control" placeholder="Link *" id="email" required="" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									
									<div id="success"></div>
									<button type="submit" class="btn">Add</button>
								</div>
							</div>
							
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<!-- skill bar item -->
						
					</div>
				</div>
				<div class="row row-0-gutter">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<br>
							
					</div>
					
					<!-- end about module -->
				</div>
			</div>

<?php $this->load->view('for_admin/footer'); ?>