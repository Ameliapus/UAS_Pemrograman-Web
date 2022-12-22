<?php

$conn = mysqli_connect("localhost", "root", "", "mobil");
if (mysqli_connect_errno()) echo "koneksi gagal", mysqli_connect_error();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS No.4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php 
      $data = "SELECT * FROM tipemobil WHERE Model = 'A 200 with AMG line'";
      $hasil = mysqli_query($conn, $data);
    ?>

    <?php 
         echo "<table> 
         <tr class='table-head'>
             <td>Model</td>
             <td>CBU/CKD</td>
             <td>Harga</td>
         </tr>
         ";
       
         
          $n = 1;
          while ($row = mysqli_fetch_array($hasil)) {
           echo "<tr>
             <td>$row[Model]</td>
             <td>$row[CBU_CKD]</td>
             <td>$row[Harga]</td>
          </tr>";
          $n++;
      
          };
     echo "</table>";
    ?>
</body>
</html>