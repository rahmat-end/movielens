<?php
	class Item_model extends CI_Model
	{
		function get_item_db(){
			$this->db->select('*');
			$this->db->from('item');
			return $this->db->get();
		}

		function add($data){
			$this->db->insert('item', $data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('item');
			$this->db->where('id_item',$id);
			return $this->db->get()->row();
		}

		function edit($data,$id){ 
			$this->db->where('id_item',$id);
			$this->db->update('item',$data);
		}

		function hapus($id){
			$this->db->where('id_item', $id);
			$this->db->delete('item');
		}

		function get_item(){
		    $query = $this->db->get('item');
		    return $query->result_array();
		}

	}