<?php 
$string = file_get_contents("data/objects.json");
$json_a = json_decode($string, true);

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
</head>
<body>
  <table id="example">
  <thead>
    <tr><th class="site_name">Name</th><th>Position</th><th>Salary</th><th>Start date</th><th>Office</th><th>Extension</th></tr>
  </thead>
  <tbody>
  </tbody>
</table>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  
  $("#example").dataTable({
  "bServerSide": true,
  "sAjaxSource": "data/objects.json",
  "aoColumns": [{
    "mData":"data"
  },{
    "mData": "name"
  },{
    "mData": "position"
  },{
    "mData": "salary"
  },{
    "mData": "start_date"
  },{
    "mData": "office"
  },{
    "mData": "extn"
  }]
});
  </script>
</body>
</html>