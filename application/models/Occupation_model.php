<?php
	class Occupation_model extends CI_Model
	{
		function get_occupation_db(){
			$this->db->select('*');
			$this->db->from('occupation');
			return $this->db->get();
		}

		function add($data){
			$this->db->insert('occupation', $data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('occupation');
			$this->db->where('id_occupation',$id);
			return $this->db->get()->row();
		}

		function edit($data,$id){ 
			$this->db->where('id_occupation',$id);
			$this->db->update('occupation',$data);
		}

		function hapus($id){
			$this->db->where('id_occupation', $id);
			$this->db->delete('occupation');
		}

		function get_occupation(){
		    $query = $this->db->get('occupation');
		    return $query->result_array();
		}

	}