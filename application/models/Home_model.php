<?php

class Home_model extends CI_Model
{
	
	function insert_model($name,$email,$comment,$date)
	{
		 
		 $file_name = $this->upload->data('file_name'); 
		 $data = array(
		 	    'name'    => $name,
		 	    'email'   => $email,
		 	    'comment' => $comment,
		 	    'date'    => $date,
                'image'   => $file_name
		 );
		 $this->db->insert('add_comment', $data);
    
	}

	function show_data_model()
	{
		
		$sql ='SELECT * FROM add_comment order by date desc';
		
        $query = $this->db->query($sql);

         return $query;
	}

	function show_data_table($sortOrder=1)
	{
		if($sortOrder==1)
			$sql ='SELECT * FROM add_comment order by name desc';

		if ($sortOrder==2)
			$sql ='SELECT * FROM add_comment order by date desc';

		if ($sortOrder==3)
			$sql ='SELECT * FROM add_comment order by email desc';

        $query = $this->db->query($sql);


         return $query;
	}
}
