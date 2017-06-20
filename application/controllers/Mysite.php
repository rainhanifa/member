<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Mysite extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('mysite/mysite.php');
			$this->load->view('template/footer.php');
		}
	}
?>	