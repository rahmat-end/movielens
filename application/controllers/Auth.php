<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
	}
	public function login(){
		$this->load->view('index/login');
	}
	
	public function proses_login_admin(){
		$username = $this->input->post('username'); 
        $password = $this->input->post('password');
        $login = $this->Admin_model->cek_login($username, $password); 

        if (!empty($login)) { 
            // login berhasil 
            $this->session->set_userdata($login); 
            redirect(base_url('Auth/dash')); 
        } else { 
            // login gagal 
            $this->session->set_flashdata('msg', '<div class="uk-alert uk-alert-danger uk-margin-medium-bottom" data-uk-alert><a href="#" class="uk-alert-close uk-close"></a>
                                Username dan atau Password Admin Salah!!</div>');
            redirect(base_url('Auth/login'));
        }
	}

	public function logout(){
		$this->session->sess_destroy();
			redirect('Auth/login');
	}

	public function dash(){
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}

}	