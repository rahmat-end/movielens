<?php
	class Data_model extends CI_Model
	{
		function get_data_db(){
			$this->db->select('*');
			$this->db->from('data');
			$this->db->join('user','user.id_user = data.id_user','left');
			$this->db->join('item','item.id_item = data.id_item','left');
			return $this->db->get();
		}

		function add($data){
			$this->db->insert('data', $data);
		}

	}