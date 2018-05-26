<!DOCTYPE html>
<html lang="en">
<head>
<title>aHn Transporters</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transporters web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web Designs" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
	<?php
    session_start();
    include_once 'dbConnection.php';
		include 'includes/header.php';

	?>

	  <div class="container">
                <table class="table table-striped">
                    <tbody>
                    <?php 
                if(isset($_SESSION['sucess'])){
                echo "<h1>".$_SESSION['sucess']."</h1>";
                unset($_SESSION['sucess']);
                }?>
                        <tr>
                            <th>Booking id</th><th>Source</th><th>Destination</th><th>Weight</th><th>Price</th><th>Transport Type</th><th>Date</th><th></th>
                        </tr>
                        <?php
                        $ud=$_SESSION['cid'];
                        $v ="SELECT * FROM book WHERE cid=$ud";
                        $result= mysqli_query($con, $v) or die(mysqli_error($con));
                         while($row = mysqli_fetch_array($result)) {
                            $bid=$row['bid'];
                            $p=$row['weight'];
                            $p=$p*500;
                         echo "<tr>";
                          echo "<td>". $row['bid']."</td>";
                          echo "<td>". $row['source'] ."</td>";
                          echo "<td>". $row['destination']."</td>";
                          echo "<td>". $row['weight']."</td>";
                          echo "<td>". $p."</td>";
                          echo "<td>". $row['date']."</td>";
                          echo "<td>". $row['type']."</td>";

                           echo "<td>". '<a href="update.php?dbid='.$bid.'">'."Cancel Booking".'</a>'."</td>";
                          
                           
                        echo "</tr>";
                          
                        } ?>
                        <tr>
                            <td colspan="5"> <a href="booking.php"><button type="submit" class="btn btn-primary">Add new Booking</button></a</td>
                    </tbody>
                </table>
            </div>

	<?php
		include 'includes/footer.php';
	?>
</body>
</html>