<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('front_data/css/bootstrap.min.css'); ?>">
  <script src="<?= base_url('front_data/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('front_data/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('front_data/js/MyScript.js') ?>"></script>

  <script type="text/javascript">
    var base_url="<?= base_url(); ?>";
  </script>
</head>
<body>

 <!-- header -->
 <?php $this->load->view('inc/header.php'); ?>
 <!-- header -->
 
 <!-- Add Comment --> 
 <?php
 // if($this->session->userdata('session_name') != true)
 // {
 //  $this->load->view('inc/login.php');
 // }
  // else
  // {
     $this->load->view('inc/get_data_admin.php');
  //}
  ?>
 <!-- Add Comment --> 

</body>
</html>