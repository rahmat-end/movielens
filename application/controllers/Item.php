<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller { 

	function __construct() {
		parent::__construct();
		//load model
		$this->load->model('Item_model');
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
		$data['list_item']=$this->Item_model->get_item_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/item/lihat', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id) {
		$data['item']=$this->Item_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/item/edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_proses() {
		$this->form_validation->set_rules('id_item','Id Item','required');
		$this->form_validation->set_rules('movie','Movie','required');
		$this->form_validation->set_rules('release_date','Release','required');
		$this->form_validation->set_rules('video_release_date','Video Release','required');
		$this->form_validation->set_rules('imdb_url','IMDB Url','required');
		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id_item');
			$data['item']=$this->Item_model->get_edit_db($id);
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/item/edit', $data);
			$this->load->view('templates/footer');
		}
		else{
			$id=$this->input->post('id_item');
		$data=array(
			'id_item'=>$this->input->post('id_item'),
			'movie'=>$this->input->post('movie'),
			'release_date'=>$this->input->post('release_date'),
			'video_release_date'=>$this->input->post('video_release_date'),
			'imdb_url'=>$this->input->post('imdb_url'),
			'unknown'=>$this->input->post('unknown'),
			'action'=>$this->input->post('action'),
			'adventure'=>$this->input->post('adventure'),
			'animation'=>$this->input->post('animation'),
			'children'=>$this->input->post('children'),
			'comedy'=>$this->input->post('comedy'),
			'crime'=>$this->input->post('crime'),
			'documentary'=>$this->input->post('documentary'),
			'drama'=>$this->input->post('drama'),
			'fantasy'=>$this->input->post('fantasy'),
			'film_noir'=>$this->input->post('film_noir'),
			'horror'=>$this->input->post('horror'),
			'musical'=>$this->input->post('musical'),
			'mystery'=>$this->input->post('mystery'),
			'romance'=>$this->input->post('romance'),
			'sci_fi'=>$this->input->post('sci_fi'),
			'thriller'=>$this->input->post('thriller'),
			'war'=>$this->input->post('war'),
			'western'=>$this->input->post('western')
		);

		$this->Item_model->edit($data,$id);
		redirect('Item/lihat');

		}
		
	}

	function hapus($id){
		$this->Item_model->hapus($id);
		redirect('User/lihat');
	}

	public function add() {
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/item/add');
		$this->load->view('templates/footer');
	}

	public function add_proses() {
		$this->form_validation->set_rules('movie','Movie','required');
		$this->form_validation->set_rules('release_date','Release','required');
		$this->form_validation->set_rules('video_release_date','Video Release','required');
		$this->form_validation->set_rules('imdb_url','IMDB Url','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/item/add');
			$this->load->view('templates/footer');
		}
		else{
			$data=array(
				'movie'=>$this->input->post('movie'),
				'release_date'=>$this->input->post('release_date'),
				'video_release_date'=>$this->input->post('video_release_date'),
				'imdb_url'=>$this->input->post('imdb_url'),
				'unknown'=>$this->input->post('unknown'),
				'action'=>$this->input->post('action'),
				'adventure'=>$this->input->post('adventure'),
				'animation'=>$this->input->post('animation'),
				'children'=>$this->input->post('children'),
				'comedy'=>$this->input->post('comedy'),
				'comedy'=>$this->input->post('comedy'),
				'documentary'=>$this->input->post('documentary'),
				'drama'=>$this->input->post('drama'),
				'fantasy'=>$this->input->post('fantasy'),
				'film_noir'=>$this->input->post('film_noir'),
				'horror'=>$this->input->post('horror'),
				'musical'=>$this->input->post('musical'),
				'mystery'=>$this->input->post('mystery'),
				'romance'=>$this->input->post('romance'),
				'sci_fi'=>$this->input->post('sci_fi'),
				'thriller'=>$this->input->post('thriller'),
				'war'=>$this->input->post('war'),
				'western'=>$this->input->post('western')
			);

			$this->Item_model->add($data);
			redirect('Item/lihat');
		}
		
	}
 
} 
