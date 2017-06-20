<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Announcement extends CI_Controller {
		public function index(){
			redirect("announcement/announcement");
		}
		public function transaction(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/announcement.php');
			$this->load->view('template/footer-member.php');
		}
		public function confirmation(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/single-announcement.php');
			$this->load->view('template/footer-member.php');
		}
	}
