<?php 

class Category_model extends CI_Model {

Public $table='tbl_cat';


function getData(){
	$data = $this->db->get($this->table);
	
	if($data->num_rows()>0){
		
		return $data->result_array();
		}else{
			return array();
			}
	
	}

function editData($id){
	$data = $this->db->where('id',$id)->get($this->table);
	
	if($data->num_rows()>0){
		
		return $data->row();
		}else{
			return array();
			}
	
	}

function insertData($array){
	$data = $this->db->insert($this->table,$array);
	if($data==1){
		return 1;
		}else{
			return 0;
		}
	}

function updateData($id,$array){
	$data = $this->db->where('id',$id)->update($this->table,$array);
	if($data==1){
		return 1;
		}else{
			return 0;
		}
	}




}