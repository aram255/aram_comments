<style>
  #img img {
      width:100px; 
  }
  </style>



<div class="container">
  <h2 style="text-align: center;">Add Comment</h2>
  <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('Home/show_data'); ?>" >
   
        
    <div class="form-group">
      <label class="control-label col-sm-2" >Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>

    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Name:</label>
      <div class="col-sm-10">          
        <input id="name" type="text" class="form-control"  placeholder="Enter name" name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Image:</label>
      <div class="col-sm-10">          
        <input id="upload-file" type="file" class="form-control"  name="img" multiple />
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Date:</label>
      <div class="col-sm-10">          
        <input id="date" type="date" class="form-control"  name="date">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Comment:</label>
      <div class="col-sm-10">          
        <textarea id="comment"  name="comment" class="form-control"  placeholder="Enter Comment"></textarea>
      </div>
    </div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button id="modal" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>
      </div>
    </div>
    

  </form>
</div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>

            <div class="modal-body" >
          <div class="row" >
  
    <div class="col-sm-4" style="width: 130px;">
      <p id="img"></p>
      <p></p>
      <p></p>
      <p></p> 
    </div>
    <p id="com" style="float: left;"></p>
  </div>
        
          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
 <?php echo  validation_errors();  ?>   
<script>

 $(document).ready(function(){
      $("#modal").click(function(){
          var name    = $("#name").val();
          var email   = $("#email").val();
          var date    = $("#date").val();
          var comment = $("#comment").val();
         
         $('#destination').html( '<p>'+name +'</p>');
         $('#destination').html( '<p>'+email +'</p>');
         $('#destination').html( '<p>'+date +'</p>');
         
         $(".col-sm-4").children().eq(1).html( '<p>'+name +'</p>');
         $(".col-sm-4").children().eq(2).html( '<p>'+email +'</p>');
         $(".col-sm-4").children().eq(3).html( '<p>'+date +'</p>');
         $("#com").html(comment);
      });
 });

        /* file reder */
document.getElementById('upload-file').addEventListener('change', function() {
  var file;
  var destination = document.getElementById('img');
  destination.innerHTML = '';

  // Looping in case they uploaded multiple files
  for(var x = 0, xlen = this.files.length; x < xlen; x++) {
    file = this.files[x];
    if(file.type.indexOf('image') != -1) { // Very primitive "validation"

      var reader = new FileReader();

      reader.onload = function(e) {
        var img = new Image();
        img.src = e.target.result; // File contents here

        destination.appendChild(img);
      };
      
      reader.readAsDataURL(file);
    }
  }
});
</script>