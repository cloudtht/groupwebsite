<?php

   require('dbconnect.php');

   $sql = "SELECT * FROM car_make
         WHERE model_id LIKE '%".$_GET['make_id']."%'";

   $result = $mysqli->query($sql);

   $json = [];
   while($row = $result->fetch_assoc()){
        $json[$row['make_id']] = $row['make_year'];
   }

   echo json_encode($json);
?>
