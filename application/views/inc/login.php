<div class="container">
  <h2 style="text-align:center;">Login</h2>
  <form class="form-horizontal" method="post" action="<?= base_url('index.php/Admin/check'); ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" >Login:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Enter Login" name="login">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control"  placeholder="Enter password" name="password">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

