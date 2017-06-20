<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Services extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header.php');
			$this->load->view('services/services.php');
			$this->load->view('template/footer.php');
		}
	}
?>	