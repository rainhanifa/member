<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Edit extends CI_Controller {
		public function index(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('account/edit.php');
			$this->load->view('template/footer-member.php');
		}
	}
