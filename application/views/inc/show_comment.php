<div class="container" id ="data_table">
  <h2 style="text-align: center;">Show Data</h2> 
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name <input type="radio" onclick="get_data(1)" value="2" id="name" name="sortOrder"></th>
        <th>Email <input type="radio" onclick="get_data(3)" value="3" id="email"  name="sortOrder"></th>
        <th>Comment </th>
        <th>date <input type="radio" onclick="get_data(2)" value="1" id="date" name="sortOrder"></th>
        <th>Iamge</th>
        <th>Changes for admin</th>
      </tr>
    </thead>
    <tbody >
        <?php //$this->load->view('inc/myTable');  ?>
    </tbody>
  </table>
  <?php $this->load->view('inc/myTable');  ?>
</div>



