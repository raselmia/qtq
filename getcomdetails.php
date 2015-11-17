<?php
$con = new mysqli("localhost","root","","new-file");
$val=$_POST['val'];
$result = $con->query("SELECT web,fb,contact FROM company WHERE name='$val'");
    while ($row = $result->fetch_object()){
        // $user_arr[] = $row->id;
         $user_arr2[] = $row->web;
         $user_arr2[] = $row->fb;
         $user_arr2[] = $row->contact;
     }
     $result->close();
   //  echo json_encode($user_arr2);
   echo ($user_arr2[0]);
   echo ',';
   echo ($user_arr2[1]);
   echo ',';
   echo ($user_arr2[2]);
   ?>

