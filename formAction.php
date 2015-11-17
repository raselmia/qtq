<?php
$name = $_POST['name'];
$web = $_POST['web'];
$fb = $_POST['fb'];
$contact = $_POST['contact'];
$invoice = $_POST['invoice'];
$area = $_POST['area'];
$trade = $_POST['trade'];
$rpro = $_POST['Rpro'];
$rser = $_POST['Rser'];
$rpun = $_POST['Rpun'];
$rwork = $_POST['Rwork'];
$rprice = $_POST['Rprice'];
$recom = $_POST['recom'];
$totalre = $rpro+$rser+$rpun+$rwork+$rprice;
$link = mysqli_connect("localhost","root","","new-file");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}  
//$sq = "SELECT * FROM company WHERE name = '$name'";
//if(mysqli_query($link, $sq)){
//    echo "This company already is in database.";
//    exit();
//} 
// attempt insert query execution
$sql = "INSERT INTO company (name, web, fb, contact, invoice, area, trade, rpro, rser, rpun, rwork, rprice, recom, totalstar) "
        . "VALUES ('$name', '$web', '$fb', '$contact','$invoice','$area', '$trade', '$rpro', '$rser','$rpun','$rwork', '$rprice', '$recom', '$totalre')";
if(mysqli_query($link, $sql)){
    echo "success";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
