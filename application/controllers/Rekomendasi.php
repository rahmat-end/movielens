<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi extends CI_Controller { 

	function __construct() {
		parent::__construct();
		//load model
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

	public function matrix() {
		// $build_array = array();
		// $list_matrix=$this->Rekomendasi_model->get_matrix_db();
		// foreach($list_matrix as $row){
		// 	$build_array[] = array(
		// 	'parent_array' => $row,
		// 	'id_user' => $row->id_user,
		// 	'child_array' =>$this->Rekomendasi_model->get_kolom()
		// 	);
		// }
		// $data['build_array'] = $build_array;
		$data['list_matrix']=$this->Rekomendasi_model->get_matrix_db();
		$data['kolom']=$this->Rekomendasi_model->get_kolom();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/rekomendasi/matrix', $data);
		$this->load->view('templates/footer');
	}

	public function prior() {
		$tablePriorVertical=$this->Rekomendasi_model->get_vertical_db();
		$tablePriorHorizontal=$this->Rekomendasi_model->get_horizontal_db();
		$dataTableVertical = array();
		$dataTableHorizontal = array();
		$countTableVertical = 0;
		$countTableHorizontal = 0;
		$dataVertical1 = 0;
		$dataVertical2 = 0;
		$dataVertical3 = 0;
		$dataVertical4 = 0;
		$dataVertical5 = 0;
		$dataHorizontal1 = 0;
		$dataHorizontal2 = 0;
		$dataHorizontal3 = 0;
		$dataHorizontal4 = 0;
		$dataHorizontal5 = 0;
		$printKey1 = 0;
		$printKey2 = 0;
		$printKey3 = 0;
		$printKey4 = 0;
		$printKey5 = 0;
		$string1 = 'user-based';
		$string2 = 'item-based';
		$calPrior = array();
		$calLikelihoodUser = array();
		$likelihoodUser = array();
		foreach ($tablePriorVertical->result_array() as $key) {
			if ($key['Rui_1'] == 1) {
				$dataVertical1++;
			} elseif ($key['Rui_1'] == 2) {
				$dataVertical2++;
			} elseif ($key['Rui_1'] == 3) {
				$dataVertical3++;
			} elseif ($key['Rui_1'] == 4) {
				$dataVertical4++;
			} else {
				$dataVertical5++;
			}
			// $dataTableVertical[]=array(
			// 	'Rui_1'=>$key['Rui_1']
			// );
			$countTableVertical++;
			$dividerVertical = $countTableVertical + 0.05;
		}
		foreach ($tablePriorHorizontal->result_array() as $key) {
			if ($key['Rui_74'] == 1 || $key['Rui_74'] == 2 || $key['Rui_74'] == 3 || $key['Rui_74'] == 4 || $key['Rui_74'] == 5 || $key['Rui_27'] == 1 || $key['Rui_27'] == 2 || $key['Rui_27'] == 3 || $key['Rui_27'] == 4 || $key['Rui_27'] == 5 || $key['Rui_17'] == 1 || $key['Rui_17'] == 2 || $key['Rui_17'] == 3 || $key['Rui_17'] == 4 || $key['Rui_17'] == 5 || $key['Rui_31'] == 1 || $key['Rui_31'] == 2 || $key['Rui_31'] == 3 || $key['Rui_31'] == 4 || $key['Rui_31'] == 5 || $key['Rui_70'] == 1 || $key['Rui_70'] == 2 || $key['Rui_70'] == 3 || $key['Rui_70'] == 4 || $key['Rui_70'] == 5 || $key['Rui_92'] == 1 || $key['Rui_92'] == 2 || $key['Rui_92'] == 3 || $key['Rui_92'] == 4 || $key['Rui_92'] == 5 || $key['Rui_20'] == 1 || $key['Rui_20'] == 2 || $key['Rui_20'] == 3 || $key['Rui_20'] == 4 || $key['Rui_20'] == 5 || $key['Rui_47'] == 1 || $key['Rui_47'] == 2 || $key['Rui_47'] == 3 || $key['Rui_47'] == 4 || $key['Rui_47'] == 5 || $key['Rui_56'] == 1 || $key['Rui_56'] == 2 || $key['Rui_56'] == 3 || $key['Rui_56'] == 4 || $key['Rui_56'] == 5 || $key['Rui_61'] == 1 || $key['Rui_61'] == 2 || $key['Rui_61'] == 3 || $key['Rui_61'] == 4 || $key['Rui_61'] == 5 || $key['Rui_80'] == 1 || $key['Rui_80'] == 2 || $key['Rui_80'] == 3 || $key['Rui_80'] == 4 || $key['Rui_80'] == 5 || $key['Rui_84'] == 1 || $key['Rui_84'] == 2 || $key['Rui_84'] == 3 || $key['Rui_84'] == 4 || $key['Rui_84'] == 5 || $key['Rui_90'] == 1 || $key['Rui_90'] == 2 || $key['Rui_90'] == 3 || $key['Rui_90'] == 4 || $key['Rui_90'] == 5 || $key['Rui_98'] == 1 || $key['Rui_98'] == 2 || $key['Rui_98'] == 3 || $key['Rui_98'] == 4 || $key['Rui_98'] == 5 || $key['Rui_60'] == 1 || $key['Rui_60'] == 2 || $key['Rui_60'] == 3 || $key['Rui_60'] == 4 || $key['Rui_60'] == 5 || $key['Rui_64'] == 1 || $key['Rui_64'] == 2 || $key['Rui_64'] == 3 || $key['Rui_64'] == 4 || $key['Rui_64'] == 5 || $key['Rui_82'] == 1 || $key['Rui_82'] == 2 || $key['Rui_82'] == 3 || $key['Rui_82'] == 4 || $key['Rui_82'] == 5) {
				$keyVal1[]=array(
					'val1'=>$key['Rui_74']
				);
				foreach ($keyVal1 as $row) {
					$printKey1 = count($row);
				}
				$keyVal2[]=array(
					'val1'=>$key['Rui_27']
				);
				foreach ($keyVal2 as $row) {
					$printKey2 = count($row);
				}
				$keyVal3[]=array(
					'val1'=>$key['Rui_17'],
					'val2'=>$key['Rui_31'],
					'val3'=>$key['Rui_70'],
					'val4'=>$key['Rui_92']
				);
				foreach ($keyVal3 as $row) {
					$printKey3 = count($row);
				}
				$keyVal4[]=array(
					'val1'=>$key['Rui_20'],
					'val2'=>$key['Rui_33'],
					'val3'=>$key['Rui_47'],
					'val4'=>$key['Rui_56'],
					'val5'=>$key['Rui_61'],
					'val6'=>$key['Rui_80'],
					'val7'=>$key['Rui_84'],
					'val8'=>$key['Rui_90'],
					'val9'=>$key['Rui_98']
				);
				foreach ($keyVal4 as $row) {
					$printKey4 = count($row);
				}
				$keyVal5[]=array(
					'val1'=>$key['Rui_60'],
					'val2'=>$key['Rui_64'],
					'val3'=>$key['Rui_82']
				);
				foreach ($keyVal5 as $row) {
					$printKey5 = count($row);
				}
			}
			$countTableHorizontal=count($key);
			$dividerHorizontal = $countTableHorizontal + 0.05;	
		}
		for($i=1; $i<3; $i++) {
			$dataVertical1 = $dataVertical1 + 0.01;
			$dataVertical2 = $dataVertical2 + 0.01;
			$dataVertical3 = $dataVertical3 + 0.01;
			$dataVertical4 = $dataVertical4 + 0.01;
			$dataVertical5 = $dataVertical5 + 0.01;
			$dataHorizontal1 = $printKey1 + 0.01;
			$dataHorizontal2 = $printKey2 + 0.01;
			$dataHorizontal3 = $printKey3 + 0.01;
			$dataHorizontal4 = $printKey4 + 0.01;
			$dataHorizontal5 = $printKey5 + 0.01;
			if ($i == 1) {
				$calPrior[]=array(
					'string'=>$string1,
					'val1'=>$dataVertical1 / $dividerVertical,
					'val2'=>$dataVertical2 / $dividerVertical,
					'val3'=>$dataVertical3 / $dividerVertical,
					'val4'=>$dataVertical4 / $dividerVertical,
					'val5'=>$dataVertical5 / $dividerVertical
				);
			} else {
				$calPrior[]=array(
					'string'=>$string2,
					'val1'=>$dataHorizontal1 / $dividerHorizontal,
					'val2'=>$dataHorizontal2 / $dividerHorizontal,
					'val3'=>$dataHorizontal3 / $dividerHorizontal,
					'val4'=>$dataHorizontal4 / $dividerHorizontal,
					'val5'=>$dataHorizontal5 / $dividerHorizontal
				);
			}
		}
		$y = $countTableHorizontal+1;
		for($i=1; $i<$y; $i++) {
			if ($i == 1) {
				$likelihoodUser[]=array(
					'val'=>17
				);
			} elseif ($i == 2) {
				$likelihoodUser[]=array(
					'val'=>20
				);
			} elseif ($i == 3) {
				$likelihoodUser[]=array(
					'val'=>27
				);
			} elseif ($i == 4) {
				$likelihoodUser[]=array(
					'val'=>31
				);
			} elseif ($i == 5) {
				$likelihoodUser[]=array(
					'val'=>33
				);
			} elseif ($i == 6) {
				$likelihoodUser[]=array(
					'val'=>47
				);
			} elseif ($i == 7) {
				$likelihoodUser[]=array(
					'val'=>56
				);
			} elseif ($i == 8) {
				$likelihoodUser[]=array(
					'val'=>60
				);
			} elseif ($i == 9) {
				$likelihoodUser[]=array(
					'val'=>61
				);
			} elseif ($i == 10) {
				$likelihoodUser[]=array(
					'val'=>64
				);
			} elseif ($i == 11) {
				$likelihoodUser[]=array(
					'val'=>70
				);
			} elseif ($i == 12) {
				$likelihoodUser[]=array(
					'val'=>74
				);
			} elseif ($i == 13) {
				$likelihoodUser[]=array(
					'val'=>80
				);
			} elseif ($i == 14) {
				$likelihoodUser[]=array(
					'val'=>82
				);
			} elseif ($i == 15) {
				$likelihoodUser[]=array(
					'val'=>84
				);
			} elseif ($i == 16) {
				$likelihoodUser[]=array(
					'val'=>90
				);
			} elseif ($i == 17) {
				$likelihoodUser[]=array(
					'val'=>92
				);
			} elseif ($i == 18) {
				$likelihoodUser[]=array(
					'val'=>98
				);
			}
		}
		$z=1;
		foreach ($likelihoodUser as $row) {
			$dataVertical1 = $dataVertical1 - 0.02;
			$dataVertical2 = $dataVertical2 - 0.02;
			$dataVertical3 = $dataVertical3 - 0.02;
			$dataVertical4 = $dataVertical4 - 0.02;
			$dataVertical5 = $dataVertical5 - 0.02;
			$calLikelihoodUser[]=array(
				'item'=>'i'.$row['val'],
				'val1'=>$dataVertical1,
				'val2'=>$dataVertical2,
				'val3'=>$dataVertical3,
				'val4'=>$dataVertical4,
				'val5'=>$dataVertical5
			);
			$z++;
		}

		$data['list_prior']=$calPrior;
		$data['list_likelihood_user']=$calLikelihoodUser;
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/rekomendasi/prior', $data);
		$this->load->view('templates/footer');
	}
 
} 
