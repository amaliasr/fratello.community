<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function index(){
		$this->load->view('for_users/team');
	}

	public function team_list(){
		$this->load->view('for_users/team_list');
	}

	public function team_view($id){
		$data['sosmed'] = $this->m_global->tampil_sosmed($id);
		$this->load->view('for_users/team_view',$data);
	}
}
