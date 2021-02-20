<?php

include('database_connection.php');

$country = '';
$query = "SELECT DISTINCT Location FROM tbl_job ORDER BY Location ASC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $country .= '<option value="'.$row['Location'].'">'.$row['Location'].'</option>';
}

?>

<html>
 <head>
  <title>Custom Search in jQuery Datatables using PHP Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <body>
  <div class="container box">
   <h3 text-align="center">Custom Search in jQuery Datatables using PHP Ajax</h3>
   <br />
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <div class="form-group">
      <select name="filter_gender" id="filter_gender" class="form-control" required>
       <option value="">Select Duration </option>
       <option value="6months">6months</option>
       <option value="12months">12months</option>
      </select>
     </div>
     <div class="form-group">
      <select name="filter_country" id="filter_country" class="form-control" required>
       <option value="">Select Location</option>
       <?php echo $country; ?>
      </select>
     </div>
     <div class="form-group" text-align="center">
      <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
     </div>
    </div>
    <div class="col-md-4"></div>
   </div>
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th width="20%">Company Name</th>
       <th width="10%">Duration</th>
       <th width="25%">Salary</th>
       <th width="15%">Rating</th>
       <th width="15%">Position</th>
       <th width="15%">Location</th>
      </tr>
     </thead>
    </table>
    <br />
    <br />
    <br />
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fill_datatable();
  
  function fill_datatable(filter_gender = '', filter_country = '')
  {
   var dataTable = $('#customer_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "searching" : false,
    "ajax" : {
     url:"fetch.php",
     type:"POST",
     data:{
      filter_gender:filter_gender, filter_country:filter_country
     }
    }
   });
  }
  
  $('#filter').click(function(){
   var filter_gender = $('#filter_gender').val();
   var filter_country = $('#filter_country').val();
   if(filter_gender != '' && filter_country != '')
   {
    $('#customer_data').DataTable().destroy();
    fill_datatable(filter_gender, filter_country);
   }
   else
   {
    alert('Select Both filter option');
    $('#customer_data').DataTable().destroy();
    fill_datatable();
   }
  });
  
  
 });
 
</script>
