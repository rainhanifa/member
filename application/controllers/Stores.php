<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Stores extends CI_Controller {
		public function index(){
			redirect("stores/store");
		}
		public function store(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('stores/store.php');
			$this->load->view('template/footer-member.php');
		}
		public function confirmation(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('stores/confirmation.php');
			$this->load->view('template/footer-member.php');
		}
	}
