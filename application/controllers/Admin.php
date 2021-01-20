<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller { 

	function __construct() {
		parent::__construct();
		//load model
		$this->load->model('Admin_model');
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
		$data['list_admin']=$this->Admin_model->get_admin_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/admin/lihat', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id) {
		$data['admin']=$this->Admin_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/admin/edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_proses() {
		$this->form_validation->set_rules('id_admin','Id Admin','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('nama_admin','Nama Admin','required');
		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id_admin');
			$data['admin']=$this->Admin_model->get_edit_db($id);
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/admin/edit', $data);
			$this->load->view('templates/footer');
		}
		else{
			$id=$this->input->post('id_admin');
		$data=array(
			'id_admin'=>$this->input->post('id_admin'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'nama_admin'=>$this->input->post('nama_admin')
		);

		$this->Admin_model->edit($data,$id);
		redirect('Admin/lihat');
		}
		
	}

	function hapus($id){
		$this->Admin_model->hapus($id);
		redirect('Admin/lihat');
	}

	public function add() {
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/admin/add');
		$this->load->view('templates/footer');
	}

	public function add_proses() {
		$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]');
		$this->form_validation->set_rules('password','Password','required|is_unique[admin.password]');
		$this->form_validation->set_rules('nama_admin','Nama Admin','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/admin/add');
			$this->load->view('templates/footer');
		}
		else{
			$data=array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'nama_admin'=>$this->input->post('nama_admin')
			);

			$this->Admin_model->add($data);
			redirect('Admin/lihat');
		}
		
	}
 
} 
