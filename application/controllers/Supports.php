<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Supports extends CI_Controller {
		public function index(){
			redirect("supports/support");
		}
		public function support(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('supports/support.php');
			$this->load->view('template/footer-member.php');
		}
		public function new_ticket(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('supports/new_ticket.php');
			$this->load->view('template/footer-member.php');
		}
		public function open_ticket(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('supports/open_ticket.php');
			$this->load->view('template/footer-member.php');
		}
		public function detail(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('supports/detail.php');
			$this->load->view('template/footer-member.php');
		}
	}
