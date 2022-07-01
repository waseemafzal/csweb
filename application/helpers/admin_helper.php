<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function get_words($sentence, $count = 10) {
  preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
  return $matches[0].'...';
}


 function record_count($table) {
	$CI =& get_instance();
   return $CI->db->count_all($table);
}

	
function getTable($table){
	$CI =& get_instance();
	$data = $CI->db->get($table);
	
	if($data->num_rows()>0){
		
		return $data->result_array();
		}else{
			return array();
			}
	
	}	

function getSettings(){
	$CI =& get_instance();
	$data = $CI->db->where('id',1)->get(TBL_SETTING);
	
	if($data->num_rows()>0){
		$arr= $data->result_array();
		return  $arr[0];
		}else{
			return array();
			}
	
	}	

	
function pre($arr){
	echo '<pre>';
	print_r($arr);exit;
	}	