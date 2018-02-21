<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="<?php //site_url('Home/insert'); ?>">Home</a></li> -->
     
    <!--   <li><a href="<?php //site_url('Home/show_data'); ?>">Show data</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <?php  //if($this->session->userdata('sess') != true){ ?>
      <li><a href="<?= site_url('admin/show'); ?>"></span> Login</a></li>
      <?php //}else{ ?>
      <!--  <li><a href="<?php //site_url('admin/index'); ?>"></span>Show request</a></li> -->
       <li><a href="<?= site_url('admin/logout'); ?>"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
       <li><form action="<?= site_url('admin/logout'); ?>"><sub></form></span>Logout</a></li>
       <?php  //}echo $this->session->userdata('sess'); 
       if(isset($_SERVER['PHP_AUTH_USER']))
       {
        //echo $_SERVER['PHP_AUTH_USER'];
       }

       ?>
    </ul>
  </div>
</nav>

