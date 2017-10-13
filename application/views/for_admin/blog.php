<?php $this->load->view('for_admin/header'); ?>

			<div class="container light-bg">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Blog</h2>
							<a href="<?=site_url('admin/blog_add')?>"><button type="button" class="btn btn-default">Tambah Isi</button></a>
						</div>
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-12">
						<!-- skill bar item -->
						<div class="table-responsive">
				                  <table class="table table-hover">
				                    <thead>
				                      <tr>
				                          <th>No</th>
				                          <th>Judul</th>
				                          <th>Foto</th>
				                          <th>Tgl Post</th>
				                          <th>Isi</th>
				                          <th>Aksi</th>
				                      </tr>
				                    </thead>
				                    <tbody>
				                        <?php $no=1; foreach ($tampil as $key) { ?>
				                        <tr>
				                          <td><?=$no++?></td>
				                          <td><?=$key->title?></td>
				                          <td><img src="<?=base_url()?>upload/sedang/<?=$key->photo?>" alt=""></td>
				                          <td><?=$key->create_date?></td>
				                          <td><?=$key->content?></td>
				                          <td>
				                              <a href="<?=site_url('admin/blog_edit/').$key->id_blog?>"><span class="glyphicon glyphicon-edit"></span></a>
				                              <a href="<?=site_url('admin/blog_delete/').$key->id_blog?>"><span class="glyphicon glyphicon-trash"></span></a>
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