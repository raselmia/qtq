<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$key = $_POST['search'];
//echo $key;
//exit();
$sql = "SELECT * FROM company where web ='$key' ORDER BY totalstar ASC";

mysql_select_db('nwe-file');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die('Could not get data: ' . mysql_error());
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Details</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/typeahead.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="clearfix top_section data_table">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="inline_menu">
                            <ul class="bdr clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="fb_forum.php">Facebook Forum</a></li>
                                <li><a href="datadetails.php">Reviews</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="reviews.php">Submit Review</a></li>
                                <li><a href="disclaimer.php">Site Disclaimer</a></li>
                                <li><a href="termscondition.php">Terms and Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>            
                        <th>Company Name</th>
                        <th>Company Web Address</th>
                        <th>Company Facebook Address</th>
                        <th>Contact Number</th>
                        <th>Invoice Number</th>
                        <th>Area</th>
                        <th>Trade</th>
                        <th>Professionalism</th>
                        <th>Customer Service skills</th>
                        <th>punctual</th>
                        <th>Workmanship</th>
                        <th>Workmanship</th>
                        <th>recommendation</th>
                        <th>SCORE PERCENT</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysql_fetch_assoc($retval)) {
                        ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['web']; ?></td>
                            <td><?php echo $row['fb']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['invoice']; ?></td>
                            <td><?php echo $row['area']; ?></td>
                            <td><?php echo $row['trade']; ?></td>
                            <td><?php echo $row['rpro']; ?></td>
                            <td><?php echo $row['rser']; ?></td>
                            <td><?php echo $row['rpun']; ?></td>
                            <td><?php echo $row['rwork']; ?></td>
                            <td><?php echo $row['rprice']; ?></td>
                            <td><?php
                                if ($row['recom'] == 1) {
                                    echo 'Yes';
                                } else {
                                    echo 'no';
                                }
                                ?></td>
                            <td><?php echo $row['totalstar']; ?></td>
                        </tr> 
                        <?php
                    }
                    mysql_close($conn);
                    ?>
                </tbody>
            </table>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/typeahead.min.js"></script>
        <script src="js/customAjax.js"></script>
    </body>
</html>
