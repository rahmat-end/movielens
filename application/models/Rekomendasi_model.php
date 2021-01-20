<?php
	class Rekomendasi_model extends CI_Model
	{
		function get_matrix_db(){
			$this->db->select('*');
			$this->db->from('rating_matrix');
			return $this->db->get();
		}

		function get_kolom() {
			// $this->db->select('RIGHT(COLUMN_NAME, LENGTH(COLUMN_NAME) - 4) AS kolom', FALSE);
			$this->db->select('COLUMN_NAME');
			$this->db->from('INFORMATION_SCHEMA.COLUMNS');
			$this->db->where("TABLE_NAME = 'rating_matrix'");
			$this->db->where("COLUMN_NAME LIKE 'Rui_%'");
			$this->db->order_by('ORDINAL_POSITION');
			return $this->db->get();
		}

		function get_vertical_db(){
			$this->db->select('Rui_1');
			$this->db->from('rating_matrix');
			$this->db->where('Rui_1 IS NOT NULL');
			return $this->db->get();
		}

		function get_horizontal_kolom() {
			$this->db->select('COLUMN_NAME');
			$this->db->from('INFORMATION_SCHEMA.COLUMNS');
			$this->db->where("TABLE_NAME = 'rating_matrix'");
			$this->db->where("COLUMN_NAME = 'Rui_17' and");
			$this->db->order_by('ORDINAL_POSITION');
			return $this->db->get();
		}

		function get_horizontal_db(){
			$this->db->select('Rui_17, Rui_20, Rui_27, Rui_31, Rui_33, Rui_47, Rui_56, Rui_60, Rui_61, Rui_64, Rui_70, Rui_74, Rui_80, Rui_82, Rui_84, Rui_90, Rui_92, Rui_98,');
			$this->db->from('rating_matrix');
			$this->db->where('id_user = 1');
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
			$this->db->update('rating_matrix',$data);
		}

		function hapus($id){
			$this->db->where('id_user', $id);
			$this->db->delete('user');
		}

	}