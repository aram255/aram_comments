<div class="container">
  <h2 style="text-align: center;">Show Data</h2> 
  <table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th>Name<!--  <input type="radio" onclick="get_data(1)" value="2" id="name" name="sortOrder"> --></th>
        <th>Email <!-- <input type="radio" onclick="get_data(3)" value="3" id="email"  name="sortOrder"> --></th>
        <th>Comment </th>
        <th>date <!-- <input type="radio" onclick="get_data(2)" value="1" id="date" name="sortOrder"> --></th>
        <th>Iamge</th>
        <th>Show</th>
        <th>Hide</th>
        <th>Permission</th>
        <th>Change for admin</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody id ="data_table">
       <?php foreach ($get_data->result() as $row){ //if($row->type==0){ ?>
      <tr>
        <td contenteditable="true" class="inp"><?= $row->name; ?></td>
        <td contenteditable="true" class="inp" ><?= $row->email; ?></td>
        <td contenteditable="true" class="inp" ><?= $row->comment; ?></td>
        <td contenteditable="true" class="inp" ><?= $row->date; ?></td>
        <td><img style='width: 40px;' src="<?= base_url('front_data/img/'.$row->image); ?>"></td>
        
     <form method="post" method="post" action="<?= site_url('Admin/add_comment'); ?>">

  <td>
       <input type="radio" name="type" value="1" <?php if($row->type==1){echo 'checked';} ?> >
 </td>

  <td>
       <input type="radio" name="type" value="2"  <?php if($row->type==2){echo 'checked';} ?>>
  </td>

  <td>
       <input type="hidden" name="id" value="<?= $row->id; ?>"> 
       <input type="submit" value="Permission">
  </td>  
      </form>  

      <td>
     <?php
      if($row->change_admin!=0)
        { 
          echo "Yes";
        }
        else
        {
          echo "No";
        }
        
      ?>
      </td>    

          <td>
           
  <form method="post" method="post" action="<?= site_url('Admin/delete'); ?>">
      <input type="hidden" name="get_id" value="<?= $row->id; ?>">
      <input type="submit" value="Delete">
  </form>

         </td>

         <td>     
      <input type="button" class="edit" id="<?= $row->id; ?>" value="Edith">
         </td>

      
        
      </tr>
      <?php }//} ?>
    </tbody>
  </table>
</div>
