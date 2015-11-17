<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM company ORDER BY totalstar ASC';

mysql_select_db('new-file');
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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/typeahead.css">
        <link rel="stylesheet" href="css/style.css">
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
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="searchCompany.php">
                            <div class="data-name text-right clearfix form-group">
                                <input type="text" name="search" class="form-control bdr" placeholder="Type Company Name for Search" id="cnameSearch" data-provde="typeahead">
                                <div style="color: white;display:inline-block;vertical-align:top;" class="">
                                    <div class="dropdown bdr">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><span class="sbt">Search By</span>
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="databyCompanyname.php">Company Name</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="databyWeb.php">Web Address</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="databyContact.php">Contact Number</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="databyTrade.php">Trade</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="databyArea.php">Area</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default bdr">Submit</button>
                            </div>
                        </form>
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
                        <th> Price/Affordability</th>
                        <th>recommendation their services</th>
                        <th>Overall Score</th>

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
                            <td><?php echo ($row['recom'] == 1) ? 'Yes' : 'no'; ?></td>
                            <td><?php echo $row['totalstar']; ?></td>
                        </tr> 
                        <?php
                    }
                    mysql_close($conn);
                    ?>
                </tbody>
            </table>
        </div>

        <script src="js/plugins.js"></script>
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/customAjax.js"></script>
        <script src="js/respond.min.js"></script>
        <script src="js/typeahead.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>