<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Account extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('account/acc_setting.php');
			$this->load->view('template/footer-member.php');
		}
	}
?>	