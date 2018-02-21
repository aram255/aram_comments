<?php

class Admin_model extends CI_Model
{
	
	public function check_model($login,$password){
	 $query = $this->db->get_where('admin', array('login' => $login,'password'=>$password));
	 if($query->num_rows()>0){
	 	return true;	 	 
	 }
	 	return false;
	}


	public function show_model()
	{
		$sql ='SELECT * FROM add_comment order by date desc';
		
        $query = $this->db->query($sql);

         return $query;
	}

	public function add_comment_model($add,$id)
	{

          $data = array('type'  => $add);

          $this->db->where('id', $id);
          $this->db->update('add_comment', $data);
          return true;
	}

	public function delete_model($id){
    	  $this->db->delete('add_comment', array('id' => $id));
    }

    public function edit_model($id,$email,$name,$comment,$date)
	{

          $data = array(
          	'email' => $email,
          	'name'  => $name,
          	'date'  => $date,
          	'comment' => $comment,
            'change_admin' => 1
          );

          $this->db->where('id', $id);
          $this->db->update('add_comment', $data);
          //return true;
   
	}
}