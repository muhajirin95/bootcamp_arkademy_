<!doctype html>
<html lang="en">
<head>
<title>arka</title>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>
<meta content="Aguzrybudy" name="author"/>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">

  <h2>Arkademy</h2>
  <a href="salary.php" class="btn btn-success"  >Salary</a></p>      

<table id="mytable" class="table table-bordered">
    <thead>
      <th>No</th>
      <th>name</th>
      <th>work</th>
      <th>salary</th>
    </thead>
<?php 
  //menampilkan data mysqli
  include "koneksi.php";
  $no = 0;
  $modal=mysql_query("
    SELECT 
        `nama`.`id`,
        `nama`.`name` as `nm`,
        `work`.`name`,
        `salary`.`salary`
        FROM
        `nama`
        INNER JOIN `work` ON (`nama`.`id_work` = `work`.`id`)
        INNER JOIN `salary` ON (`nama`.`id_salary` = `salary`.`id`)

    ");
 
  while($r=mysql_fetch_array($modal)){
  $no++;
       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $r['nm']; ?></td>
      <td><?php echo $r['name'] ?></td>
      <td><?php echo  $r['salary']; ?></td>
     
  </tr>
 

<?php } ?>
</table>
</div>


</body>
</html>

  



