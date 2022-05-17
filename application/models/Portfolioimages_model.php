
<?php 

class Portfolioimages_model extends CI_Model {

Public $table='portfolio_images';


function getData(){
	$data = $this->db->get($this->table);
	
	if($data->num_rows()>0){
		
		return $data->result_array();
		}else{
			return array();
			}
	
	}

public function do_upload($max_width=1024,$max_height=768)
        {
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
/*                $config['max_size']             = 100;
                $config['max_width']            = $max_width;
                $config['max_height']           = $max_height;
 */               $config['overwrite']           = false;
                $config['encrypt_name']           = true;
                $config['remove_spaces']           = true;
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $response['status']=204;
                       		$response['message']='Not uploaded';
                       		$response['error']=$error;
							echo json_encode($response);exit;
                }
                else
                {
					$uploaded=$this->upload->data();
					//print_r($uploaded);exit;
					return $uploaded['file_name'];
					
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