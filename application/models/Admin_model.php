<?php
	class Admin_model extends CI_Model
	{
		function get_admin_db(){
			$this->db->select('*');
			$this->db->from('admin');
			return $this->db->get();
		}

		function add($data){
			$this->db->insert('admin', $data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('id_admin',$id);
			return $this->db->get()->row();
		}

		function edit($data,$id){ 
			$this->db->where('id_admin',$id);
			$this->db->update('admin',$data);
		}

		function hapus($id){
			$this->db->where('id_admin', $id);
			$this->db->delete('admin');
		}
		
		public function cek_login($username, $password){
			$this->db->where('username', $username);
			$this->db->where('password',$password);
			$query = $this->db->get('admin');
			return $query->row_array();
		}

	}