<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index(){

		$data['konten']="home";
		$this->load->view('template',$data);
	}

	public function Profil(){
		$data['konten']="v_profil";
		$this->load->view('template', $data);
	}

	public function Gallery(){
		$data['konten']="v_gallery";
		$this->load->view('template', $data);
	}

	public function Event(){
		$data['konten']="v_event";
		$this->load->view('template', $data);
	}
}
?>