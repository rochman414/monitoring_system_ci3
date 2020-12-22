<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portmonitoring extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('mip');
		$this->load->view('templates/footer');
	}
}