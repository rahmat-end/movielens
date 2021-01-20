<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller { 

	function __construct() {
		parent::__construct();
		//load model
		$this->load->model('User_model');
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
		$data['list_user']=$this->User_model->get_user_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/user/lihat', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id) {
		$data['user']=$this->User_model->get_edit_db($id);
		$data['occupation']=$this->Occupation_model->get_occupation();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/user/edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_proses() {
		$this->form_validation->set_rules('id_user','Id User','required');
		$this->form_validation->set_rules('age','Age','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('zipcode','Zipcode','required');
		$this->form_validation->set_rules('id_occupation','Occupation','required');

		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id_user');
			$data['user']=$this->User_model->get_edit_db($id);
			$data['occupation']=$this->Occupation_model->get_occupation();
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/user/edit', $data);
			$this->load->view('templates/footer');
		}
		else{
			$id=$this->input->post('id_user');
		$data=array(
			'id_user'=>$this->input->post('id_user'),
			'age'=>$this->input->post('age'),
			'gender'=>$this->input->post('gender'),
			'zipcode'=>$this->input->post('zipcode'),
			'id_occupation'=>$this->input->post('id_occupation')
		);

		$this->User_model->edit($data,$id);
		redirect('User/lihat');

		}
		
	}

	function hapus($id){
		$this->User_model->hapus($id);
		redirect('User/lihat');
	}

	public function add() {
		$data['occupation']=$this->Occupation_model->get_occupation();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/user/add', $data);
		$this->load->view('templates/footer');
	}

	public function add_proses() {
		$this->form_validation->set_rules('age','Age','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('zipcode','Zipcode','required');
		$this->form_validation->set_rules('id_occupation','Occupation','required');
		if ($this->form_validation->run() == FALSE) {
			$data['occupation']=$this->Occupation_model->get_occupation();
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/user/add', $data);
			$this->load->view('templates/footer');
		}
		else{
			$data=array(
				'age'=>$this->input->post('age'),
				'gender'=>$this->input->post('gender'),
				'zipcode'=>$this->input->post('zipcode'),
				'id_occupation'=>$this->input->post('id_occupation')
			);

			$this->User_model->add($data);
			redirect('User/lihat');
		}
		
	}
 
} 
