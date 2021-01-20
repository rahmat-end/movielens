<?php
	class User_model extends CI_Model
	{
		function get_user_db(){
			$this->db->select('*');
			$this->db->from('user');
			$this->db->join('occupation','occupation.id_occupation = user.id_occupation','left');
			return $this->db->get();
		}

		function add($data){
			$this->db->insert('user', $data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('user');
			$this->db->join('occupation','occupation.id_occupation = user.id_occupation','left');
			$this->db->where('id_user',$id);
			return $this->db->get()->row();
		}

		function edit($data,$id){ 
			$this->db->where('id_user',$id);
			$this->db->update('user',$data);
		}

		function hapus($id){
			$this->db->where('id_user', $id);
			$this->db->delete('user');
		}

		function get_user(){
		    $query = $this->db->get('user');
		    return $query->result_array();
		}

	}