<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('front_data/css/bootstrap.min.css'); ?>">
  <script src="<?= base_url('front_data/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('front_data/js/bootstrap.min.js') ?>"></script>

  <script type="text/javascript">
    var base_url="<?= base_url(); ?>"
  </script>
</head>
<body>

 <!-- header -->
 <?php $this->load->view('inc/header.php'); ?>
 <!-- header -->
 
 <!-- Add Comment --> 
 <?php $this->load->view('inc/add_comment'); ?>
 <!-- Add Comment --> 

</body>
</html>
