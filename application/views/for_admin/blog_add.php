<?php $this->load->view('for_admin/header'); ?>

			<div class="container light-bg">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Blog</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="mz-about-container">
							<p>A creative agency based on Candy Land, ready to boost your business with some beautifull templates. Lattes Agency is one of the best in town see more you will be amazed.</p>
							<a href="<?=site_url('admin/blog_add')?>" ><button type="button" class="btn btn-default">Tambah Isi</button></a>
							
						</div>

					</div>
					<div class="col-md-8">
						<!-- skill bar item -->
						<div class="col-md-8">
									<br>
									<form action="<?=site_url('admin/blog_processingAdd')?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" name="judul" class="form-control" placeholder="Judul *" required="" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<textarea class="form-control" name="content"  placeholder="Konten *" required=""></textarea>
										<p class="help-block text-danger"></p>
									</div>
									
									<div class="form-group">
											<label for="">Upload Gambar</label>
						                      <input type="file" name="gambar" class="form-control" id="" placeholder="Input field">
											<p class="help-block text-danger"></p>
										</div>
									<div id="success"></div>
									<button type="submit" class="btn">Add</button>
									</form>
						</div>
						
						<br><br>
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


