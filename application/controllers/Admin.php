<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	//ADMIN
	public function index(){
		$data['tampil'] = $this->m_global->tampil('admin','id_admin');
		$this->load->view('for_admin/admin',$data);
	}

	public function admin_add(){
		$this->load->view('for_admin/admin_add');
	}

	public function admin_processingAdd(){
			$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);
			$this->m_global->tambah('admin',$data);
			redirect('admin','refresh');
	}

	public function admin_edit($id){
			$data['tampil'] = $this->m_global->tampil_id($id,'admin','id_admin');
			$this->load->view('for_admin/admin_edit',$data);
	}

	public function admin_processingEdit($id){
			$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);
			$this->m_global->edit($id,'admin',$data,'id_admin');
			redirect('admin','refresh');
	}

	public function admin_delete($id){
			$this->m_global->hapus($id,'admin','id_admin');
			redirect('admin','refresh');
	}

	//ANGGOTA
	public function anggota(){
		$data['tampil'] = $this->m_global->tampil('anggota','id_anggota');
		$this->load->view('for_admin/anggota',$data);
	}

	public function anggota_add(){
		$this->load->view('for_admin/anggota_add');
	}

	public function anggota_processingAdd(){
			$foto = "IMG_".time();
			$config['upload_path'] = './upload/original';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = '1024';
	        $config['file_name'] = $foto;

	        $this->load->library('upload', $config);
	        $image_data = $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $image_data = $this->upload->data();
	            $data['nama_anggota'] 		= $this->input->post("nama"); 
		 		$data['photo_profile'] 		= $image_data['file_name'];

	            $this->m_global->tambah('anggota',$data);

	            $config['source_image'] 	= $image_data['full_path'];
	            $config['new_image']      	= './upload/sedang';
	            $config['maintain_ratio'] 	= true;
	            $config['width']          	= 100;
	            $config['height']         	= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/anggota','refresh');
		 	}
	}

	public function anggota_edit($id){
			$data['tampil'] = $this->m_global->tampil_id($id,'anggota','id_anggota');
			$this->load->view('for_admin/anggota_edit',$data);
	}

	public function anggota_processingEdit($id){
			$foto						= "IMG_".time();
			$path						= './upload/original/';
			$config['upload_path']		= $path;
	        $config['allowed_types']	= 'jpg|jpeg|png';
	        $config['max_size']			= '1024';
	        $config['file_name']		= $foto;

	        $this->load->library('upload', $config);
	        $image_data	= $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}
		 	else{
	            $image_data = $this->upload->data();

	            $file_lama				= $this->input->post('file_lama');
	            $data['nama_anggota']	= $this->input->post('nama');
		 		$data['photo_profile']	= $image_data['file_name'];
		 		$path1					= './upload/sedang/';

		 		@unlink($path.$file_lama);
		 		@unlink($path1.$file_lama);

	            $this->m_global->edit($id,'anggota',$data,'id_anggota');

	            $config['source_image']		= $image_data['full_path'];
	            $config['new_image']		= './upload/sedang';
	            $config['maintain_ratio']	= true;
	            $config['width']			= 100;
	            $config['height']			= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/anggota','refresh');
		 	}
	}

	public function anggota_delete($id){
			$path 		= './upload/original/';
			$path1 		= './upload/sedang/';

			$del_gbr = $this->m_global->tampil_file('anggota','id_anggota',$id);
			
			@unlink($path.$del_gbr->photo_profile);
			@unlink($path1.$del_gbr->photo_profile);

			$this->m_global->hapus($id,'anggota','id_anggota');
			redirect('admin/anggota','refresh');
	}

	public function anggota_link_add($id){
		//echo $id;
		$data['id_anggota']	= $id;
		$data['icon'] 		= $this->m_global->tampil('icon_sosmed','id_icon');
		//$data['link']		= $this->m_global->tampil('sosmed_anggota','id_anggota');
		$data['tampil']		= $this->m_global->tampil_sosmed($id);

		//print_r($data['tampil']);
		$this->load->view('for_admin/link_add',$data);
	}

	public function anggota_link_processingAdd($id){
		$data = array(
					"link_sosmed"	=> $this->input->post("link"),
					"id_anggota"	=> $id,
					"id_icon"		=> $this->input->post("icon")
				);

		$this->m_global->tambah('sosmed_anggota',$data);
		//redirect('admin/anggota_link_add','refresh');
		echo "<script> window.history.back();</script>";
	}

	public function anggota_link_delete($id){
		$this->m_global->hapus($id,'sosmed_anggota','id_sosmed');
		//redirect('admin/anggota_link_add','refresh');
		echo "<script> window.history.back();</script>";
	}

	public function anggota_image_add(){
		$this->load->view('for_admin/image_add');
	}

	//BLOG
	public function blog(){
		$data['tampil'] = $this->m_global->tampil('blog','id_blog');
		$this->load->view('for_admin/blog',$data);
		//$this->load->view('for_users/blog',$data);
	}

	public function blog_add(){
		$this->load->view('for_admin/blog_add');
	}

	public function blog_processingAdd(){
			$foto = "IMG_".time();
			$config['upload_path'] = './upload/original';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = '1024';
	        $config['file_name'] = $foto;

	        $this->load->library('upload', $config);
	        $image_data = $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $image_data = $this->upload->data();
	            $data['title'] 			= $this->input->post("judul");
	            $data['photo'] 			= $image_data['file_name'];
	            $data['content'] 		= $this->input->post("content"); 
		 		$data['create_date'] 	= date("Y-m-d");

	            $this->m_global->tambah('blog',$data);

	            $config['source_image'] 	= $image_data['full_path'];
	            $config['new_image']      	= './upload/sedang';
	            $config['maintain_ratio'] 	= true;
	            $config['width']          	= 100;
	            $config['height']         	= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/blog','refresh');
		 	}
	}

	public function blog_edit($id){
			$data['tampil'] = $this->m_global->tampil_id($id,'blog','id_blog');
			$this->load->view('for_admin/blog_edit',$data);
	}

	public function blog_processingEdit($id){
			$foto						= "IMG_".time();
			$path						= './upload/original/';
			$config['upload_path']		= $path;
	        $config['allowed_types']	= 'jpg|jpeg|png';
	        $config['max_size']			= '1024';
	        $config['file_name']		= $foto;

	        $this->load->library('upload', $config);
	        $image_data	= $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				// echo $this->upload->display_errors();
	        	$data['title']			= $this->input->post('judul');
		 		//$data['photo']			= $image_data['file_name'];
		 		$data['content']		= $this->input->post('content');
		 		$data['create_date']	= $this->input->post('date');
		 		$this->m_global->edit($id,'blog',$data,'id_blog');
		 		redirect('admin/blog','refresh');
		 	}
		 	else{
	            $image_data = $this->upload->data();

	            $file_lama				= $this->input->post('file_lama');
	            $data['title']			= $this->input->post('judul');
		 		$data['photo']			= $image_data['file_name'];
		 		$data['content']		= $this->input->post('content');
		 		$data['create_date']	= $this->input->post('date');
		 		$path1					= './upload/sedang/';

		 		@unlink($path.$file_lama);
		 		@unlink($path1.$file_lama);

	            $this->m_global->edit($id,'blog',$data,'id_blog');

	            $config['source_image']		= $image_data['full_path'];
	            $config['new_image']		= './upload/sedang';
	            $config['maintain_ratio']	= true;
	            $config['width']			= 100;
	            $config['height']			= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/blog','refresh');
		 	}
	}

	public function blog_delete($id){
			$path 		= './upload/original/';
			$path1 		= './upload/sedang/';

			$del_gbr = $this->m_global->tampil_file('blog','id_blog',$id);
			
			@unlink($path.$del_gbr->photo);
			@unlink($path1.$del_gbr->photo);

			$this->m_global->hapus($id,'blog','id_blog');
			redirect('admin/blog','refresh');
	}

	public function galery(){
		$data['tampil'] = $this->m_global->tampil('galery','id_galery');
		$this->load->view('for_admin/galery',$data);
	}

	public function galery_add(){
		$this->load->view('for_admin/galery_add');
	}

	public function galery_processingAdd(){
			$foto = "IMG_".time();
			$config['upload_path'] = './upload/original';
	        $config['allowed_types'] = 'jpg|jpeg|png';
	        $config['max_size']      = '1024';
	        $config['file_name'] = $foto;

	        $this->load->library('upload', $config);
	        $image_data = $this->upload->data();

	        if (! $this->upload->do_upload('gambar')){ // name="upload"
				echo $this->upload->display_errors();
		 	}else{

	            $image_data = $this->upload->data();
		 		$data['nama'] 		= $image_data['file_name'];

	            $this->m_global->tambah('galery',$data);

	            $config['source_image'] 	= $image_data['full_path'];
	            $config['new_image']      	= './upload/sedang';
	            $config['maintain_ratio'] 	= true;
	            $config['width']          	= 100;
	            $config['height']         	= 180;

	            // kemudian panggil fungsi initialize() sebelum fungsi resize()
	            // kalau tidak, hanya akan menghasilkan 1 file saja
	            $this->image_lib->initialize($config);
	            $this->image_lib->resize();

	            redirect('admin/galery','refresh');
		 	}
	}
	public function galery_delete($id){
			$path 		= './upload/original/';
			$path1 		= './upload/sedang/';

			$del_gbr = $this->m_global->tampil_file('galery','id_galery',$id);
			
			@unlink($path.$del_gbr->photo_profile);
			@unlink($path1.$del_gbr->photo_profile);

			$this->m_global->hapus($id,'galery','id_galery');
			redirect('admin/galery','refresh');
	}

}
