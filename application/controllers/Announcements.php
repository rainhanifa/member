<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Announcements extends CI_Controller {
		public function index(){
			redirect("announcement/announcement");
		}
		public function announcement(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/announcement.php');
			$this->load->view('template/footer-member.php');
		}
		public function single_announcement(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/single-announcement.php');
			$this->load->view('template/footer-member.php');
		}
	}
