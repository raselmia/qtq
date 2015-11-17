<?php
$con = new mysqli("localhost","root","","new-file");

$query= $_SERVER['QUERY_STRING'];
$result = $con->query("SELECT id,area FROM company WHERE area LIKE '$query%'");
    while ($row = $result->fetch_object()){
         $user_arr[] = $row->id;
         $user_arr2[] = $row->area;
     }
     $result->close();
     echo json_encode($user_arr2);
?>
