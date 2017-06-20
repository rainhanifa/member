<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Knowledgebase extends CI_Controller {
		public function index(){
			redirect("knowledgebase/knowledgebase");
		}
		public function knowledgebase(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('knowledgebase/knowledgebase.php');
			$this->load->view('template/footer-member.php');
		}
		public function single_knowledgebase(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('knowledgebase/single-knowledgebase.php');
			$this->load->view('template/footer-member.php');
		}
	}
