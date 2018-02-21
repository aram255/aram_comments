<?php

class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		/* Load form validation library */ 
        $this->load->library('form_validation');
        $this->load->library('image_lib');
        $this->load->helper(array('form'));
	}

	public function insert()
	{   
 
		  $name    = $this->input->post('name');
         $email   = $this->input->post('email');
         $comment = $this->input->post('comment');
         $date    = $this->input->post('date');
            
         /* Set validation rule for name field in the form */ 
         $this->form_validation->set_rules('name', 'Name', 'required'); 
         $this->form_validation->set_rules('email', 'Email', 'required'); 
         //$this->form_validation->set_rules('img', 'Img', 'required'); 
         $this->form_validation->set_rules('comment', 'Comment', 'required'); 
         $this->form_validation->set_rules('date', 'Date', 'required'); 
            
         if ($this->form_validation->run() == FALSE) { 
           $this->load->view('index');

         } 
         else { 
             //  succsses    
        $config['upload_path']        = 'front_data/img/';
        $config['allowed_types']      = 'gif|jpg|png';
        $config['max_size']           = 5000;
        $config['max_width']          = 320;
        $config['max_height']         = 240;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('img'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('index', $error); 
            redirect('Home/show_data');   
        }
          
         $data =  $this->Home_model->insert_model($name,$email,$comment,$date);
         $this->load->view('index');
         } 

	}



	public function show_data()
 	{	
          $this->insert();
          $data['get_data'] = $this->Home_model->show_data_model();
          $this->load->view('show_data',$data);

	}

	 function show_data_table()
 	{	 
		 $sortOrder=$this->input->post('sortOrder');
		 $data['get_data'] = $this->Home_model->show_data_table($sortOrder);
		 $this->load->view('show_data',$data);
         
         
	}
}