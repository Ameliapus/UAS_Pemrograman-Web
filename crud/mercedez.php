<?php
$conn = mysqli_connect("localhost","root","", "mobil");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>UAS No.3</title>
</head>
<body>
<div class="head">    
    <header>
        <img src = "img/logo.png" width=70pc alt="">
        <p><a href="https://www.mercedes-benz.com/en/">Mercedes Benz</a></p>
    </header>
</div>

<?php 
      $data = "SELECT * FROM tipemobil";
      $hasil = mysqli_query($conn, $data);
    ?>

    <?php 
         echo "<table> 
         <tr class='table-head'>
             <td>Model</td>
             <td>CBU/CKD</td>
             <td>Harga</td>
         </tr>
         <tr class='type'>
            <td colspan=3>Class A</td>
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
          if($row['id'] ==  5) {
            echo "
                <tr class='type'>
                    <td colspan=3>CLA</td>
                </tr>
            ";
          } else if ($row['id'] ==  11){
            echo "
                <tr class='type'>
                    <td colspan=3>GLA</td>
                </tr>
            ";
          }
          };
     echo "</table>";
    ?>

    <footer>
        <p> Copyright @ 2022 - Mercedes Benz Indonesia | Hak cipta dilindungi undang-undang </p>
</footer>
</body>
</html>