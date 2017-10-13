<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		// $data['id_anggota'] =;
		//$data['member'] = $this->m_global->tampil_sosmed_user();
		$this->load->view('for_users/home');
	}
}
