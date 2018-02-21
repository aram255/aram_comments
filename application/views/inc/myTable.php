      <div class="container-fluid bg-3 text-center" id="id01">    
  <h3>Show Data</h3><br>
     <?php foreach ($get_data->result() as $row){ if($row->type!=0 && $row->type!=2){ ?>
  <div class="row" style="border:1px solid black; width: 50%;">
  
    <div >
     <div class="col-sm-4">
      <img src="<?= base_url('front_data/img/'.$row->image); ?>" class="img-responsive" style="width:100%" alt="Image">
      <p class="name"><?= $row->name; ?></p>
      <p class="email"><?= $row->email; ?></p>
      <p class="date"><?= $row->date; ?></p>
    </div>
    <p style="float: left;"><?= $row->comment; ?></p>
    </div>
  
  </div><br>


    <?php }} ?>




 <button onclick="sortName()">Sort Name</button>
 <button onclick="sortEmail()">Sort Email</button>
 <button onclick="sortDate()">Sort Date</button>
    
</div><br>

<script src="<?= base_url('front_data/js/MySort.js'); ?>"></script>
