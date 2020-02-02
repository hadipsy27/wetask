<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Task extends CI_Controller {
		public function index(){
			// $data['task'] = $this->m_task->tampil_data()->result();
			$this->load->view('_templates/head.php');
			$this->load->view('_templates/navbar.php');
			// $this->load->view('_templates/sidebar.php');
			$this->load->view('_templates/content.php');
			$this->load->view('_templates/footer.php');
		}
	}