<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data["menu"]=array("Beranda","Berita","Kontak","Tentang");
		$data["angka"]=10;
		$this->load->view('depan/atas',$data);
		$this->load->view('depan/tengah');
		$this->load->view('depan/bawah');
	}
	//fungsi untuk login slamet 24/03/2021
	public function login(){
		$this->load->view('belakang/login');
	}
}
