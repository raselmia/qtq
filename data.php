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

        <!-- Bootstrap -->
        <link rel="stylesheet" href="typeahead/bootstrap.min.css">
        <link rel="stylesheet" href="typeahead/styles.min.css">
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
                <div class="col-sm-6">
                    <a href="index.php" class="back_home">Back to Homepage</a>
                </div>
                <div class="col-sm-6">
                    <form method="post" action="searchCompany.php">
                        <div class="form-group">
                            <input type="text" name="q"  autocomplete="off" autofocus="autofocus" class="form-control" placeholder="Type Company Name for Search" id="Search" data-provide = 'typeahead'>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </form>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="typeahead/bootstrap.min.js"></script>
        <script type="text/javascript" src="typeahead/bootstrap-typeahead.min.js"></script>
        <script src="js/customAjax.js"></script>
        <script>
                $(document).ready(function(){
        $('#Search').typeahead({
            source: [
                { id: 1, name: 'Toronto' },
                { id: 2, name: 'Montreal' },
                { id: 3, name: 'New York' },
                { id: 4, name: 'Buffalo' },
                { id: 5, name: 'Boston' },
                { id: 6, name: 'Columbus' },
                { id: 7, name: 'Dallas' },
                { id: 8, name: 'Vancouver' },
                { id: 9, name: 'Seattle' },
                { id: 10, name: 'Los Angeles' }
            ]
        });
        /*
$('#Search').typeahead({
            ajax: {
                url: 'connect.php',
                method: 'post',
                triggerLength: 1
            }

        });
        */
    });
        </script>
    </body>
</html>