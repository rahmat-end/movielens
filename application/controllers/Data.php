<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller { 

	function __construct() {
		parent::__construct();
		//load model
		$this->load->model('Data_model');
		$this->load->model('User_model');
		$this->load->model('Item_model');
		$this->load->model('Rekomendasi_model');
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
		$data['list_data']=$this->Data_model->get_data_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/data/lihat', $data);
		$this->load->view('templates/footer');
	}

	public function add() {
		$data['user']=$this->User_model->get_user();
		$data['item']=$this->Item_model->get_item();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/data/add', $data);
		$this->load->view('templates/footer');
	}

	public function add_proses() {
		$this->form_validation->set_rules('id_user','Id User','required');
		$this->form_validation->set_rules('id_item','Id Item','required');
		$this->form_validation->set_rules('rating','Rating','required');
		$this->form_validation->set_rules('timestamp','Timestamp','required');
		if ($this->form_validation->run() == FALSE) {
			$data['user']=$this->User_model->get_user();
			$data['item']=$this->Item_model->get_item();
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/data/add', $data);
			$this->load->view('templates/footer');
		}
		else{
			$idUser=$this->input->post('id_user');
			$idItem=$this->input->post('id_item');
			$data=array(
				'id_user'=>$this->input->post('id_user'),
				'id_item'=>$this->input->post('id_item'),
				'rating'=>$this->input->post('rating'),
				'timestamp'=>$this->input->post('timestamp')
			);
			$dataMatrix=array(
				'id_user'=>$this->input->post('id_user'),
				'Rui_'.$idItem=>$this->input->post('rating')
			);

			$this->Data_model->add($data);
			$this->Rekomendasi_model->edit($dataMatrix,$idUser);
			redirect('Data/lihat');
		}
		
	}
 
} 
