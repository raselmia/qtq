<?php
$con = new mysqli("localhost","root","","new-file");

$query= $_SERVER['QUERY_STRING'];
$result = $con->query("SELECT id,trade FROM company WHERE trade LIKE '$query%'");
    while ($row = $result->fetch_object()){
         $user_arr[] = $row->id;
         $user_arr2[] = $row->trade;
     }
     $result->close();
     echo json_encode($user_arr2);
?>