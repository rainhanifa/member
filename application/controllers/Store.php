<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Store extends CI_Controller {
		public function index(){
			redirect("store/store");
		}
		public function store(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('store/store.php');
			$this->load->view('template/footer-member.php');
		}
		public function confirmation(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('store/confirmation.php');
			$this->load->view('template/footer-member.php');
		}
	}
