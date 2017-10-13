<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index(){
		$data['tampil'] = $this->m_global->tampil('blog','id_blog');
		$this->load->view('for_users/blog',$data);
	}

	public function read_more($id){
		$data['read_more'] = $this->m_global->read_more($id);
		$this->load->view('for_users/read_more', $data);
	}
}
