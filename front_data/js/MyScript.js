function get_data(sortOrder)
{
    	 $.ajax({
             url: base_url+"index.php/Home/show_data_table",
             type: 'post',
             data: {sortOrder:sortOrder},               
             success:function(d){
               $('#data_table').html(d);
             }
       });
      
}


$(document).ready(function(){
      
      var contents = $('.inp').html();
      $('.inp').blur(function() {
     if(contents!=$(this).html()){
 
  
     $('.edit').click(function(){
         var get_id  = $(this).attr('id');
         var name    = $(this).parent().prev().prev().prev().prev().prev().prev().prev().prev().prev().prev().prev().text();
         var email   = $(this).parent().prev().prev().prev().prev().prev().prev().prev().prev().prev().prev().text();
         var comment = $(this).parent().prev().prev().prev().prev().prev().prev().prev().prev().prev().text();
         var date = $(this).parent().prev().prev().prev().prev().prev().prev().prev().prev().text();
       
   
     $.ajax({
             url: base_url+"index.php/Admin/edit",
             type: 'post',
             data: {get_id:get_id,name:name,email:email,comment:comment,date:date},               
             success:function(d){
               // alert(d);
             }
       });

     });


    }
});


});