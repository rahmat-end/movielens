<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Occupation extends CI_Controller { 

	function __construct() {
		parent::__construct();
		//load model
		$this->load->model('Occupation_model');
		//vaidasi inputan
        $this->load->library('form_validation');
	}
 
	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}

	public function lihat() {
		$data['list_occupation']=$this->Occupation_model->get_occupation_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/occupation/lihat', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id) {
		$data['occupation']=$this->Occupation_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/occupation/edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_proses() {
		$this->form_validation->set_rules('id_occupation','Id Occupation','required');
		$this->form_validation->set_rules('name_occupation','Name Occupation','required');
		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id_occupation');
			$data['occupation']=$this->Occupation_model->get_edit_db($id);
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/occupation/edit', $data);
			$this->load->view('templates/footer');
		}
		else{
			$id=$this->input->post('id_occupation');
		$data=array(
			'id_occupation'=>$this->input->post('id_occupation'),
			'name_occupation'=>$this->input->post('name_occupation')
		);

		$this->Occupation_model->edit($data,$id);
		redirect('Occupation/lihat');
		}
		
	}

	function hapus($id){
		$this->Occupation_model->hapus($id);
		redirect('Occupation/lihat');
	}

	public function add() {
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/occupation/add');
		$this->load->view('templates/footer');
	}

	public function add_proses() {
		$this->form_validation->set_rules('name_occupation','Name Occupation','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/occupation/add');
			$this->load->view('templates/footer');
		}
		else{
			$data=array(
				'name_occupation'=>$this->input->post('name_occupation')
			);

			$this->Occupation_model->add($data);
			redirect('Occupation/lihat');
		}
		
	}
 
} 
