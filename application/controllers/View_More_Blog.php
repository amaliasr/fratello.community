<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_More_Blog extends CI_Controller {

	public function index(){
		$this->load->view('for_users/view_more_blog');
	}
}
