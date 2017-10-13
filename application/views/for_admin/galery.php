<?php $this->load->view('for_admin/header'); ?>

			<div class="container light-bg">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Galery</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="mz-about-container">
							<p>A creative agency based on Candy Land, ready to boost your business with some beautifull templates. Lattes Agency is one of the best in town see more you will be amazed.</p>
							<a href="<?=site_url('admin/galery_add')?>"><button type="button" class="btn btn-default">Tambah</button></a>
							
						</div>

					</div>
					<div class="col-md-8">
						<!-- skill bar item -->
						<div class="table-responsive">
				                  <table class="table table-hover">
				                    <thead>
				                      <tr>
				                          <th>No</th>
				                          <th>Gambar</th>
				                          <th>Aksi</th>
				                      </tr>
				                    </thead>
				                    <tbody>
				                        <?php  
				                        	$no = 1;
				                        	foreach ($tampil as $key) { 
				                        ?>
				                        <tr>
				                          <td><?=$no++;?></td>
				                          <td><img src="<?=base_url()?>upload/sedang/<?=$key->nama;?>" alt=""></td>
				                          <td>
				                              <a href="<?=site_url('admin/galery_delete/').$key->id_galery?>"><span class="glyphicon glyphicon-trash"></span></a>
				                          </td>
				                        </tr>
				                        <?php } ?>
				                      </tbody>
				                  </table>
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