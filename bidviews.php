<?php



$pname = $_GET['pname'];

$brand = $_GET['brand'];


}
else
{
	echo "<script>";
	echo "alert('Error.');


</script>";
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>

        GetLocally | Online Price Comparison - Find Retail and Wholesale Salers for Electronics, Computers, Laptops, Mobiles and more.

    </title>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noodp, noydir, index, follow, archive" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/merchandise.css" />
</head>

<body id='home-page'>

    <nav class="navbar">
        <div class="container">
            <div class="text-right top-nav-strip">
                <a href="tel:9585623678">
                    <span class="fa fa-phone"></span> 9585623678
                </a>
                <a href="#">
                    <span class="fa fa-envelope-o"></span> <span class="__cf_email__">Support@GetLocally.in</span>
                </a>

            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#moreMenus" aria-expanded="false" aria-controls="navbar">
                    <span class="fa fa-ellipsis-v"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <img src="img/GetLocally.png" />
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav">
                    <li class="dropdown more-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="fa fa-ellipsis-h"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="howitworks.html">How it works</a></li>
                            <li><a href="about.html">About us</a></li>

                            <hr class="visible-xs visible-sm" />
                            <li class="visible-xs visible-sm"><a href="tel:9585623678"><span class="icon-phone2 mail-top_head_nav"></span>9585623678</a></li>
                            <li class="visible-xs visible-sm"><a href=""><span class="icon-mail5 mail-top_head_nav"></span> Support@getlocally.in</a></li>


                        </ul>
                    </li>
                </ul>
                <div id="pageNavbarRight">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="quote.php" class="btn btn-info">
      	Create a Need
      </a>
                        </li>


                        <!-- Notification Dropdown -->


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-user"></span>
                                <span class="im-user-name"><span class="__cf_email__"><?php echo $eid;?></span></span>
                                <span class="fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="quote.php">My Request</a></li>
                                <li><a href="">My Favourites</a></li>
                                <li><a href="bidinvite.php">My Bidding Invites</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <!--/.nav-collapse -->

            <div id="moreMenus" class="navbar-collapse collapse">
                <ul>
                    <li>
                        <div class="text-right top-nav-strip">
                            <a href="tel:9585623678">
                                <span class="fa fa-phone"></span> 9585623678
                            </a>
                            <a href="#">
                                <span class="fa fa-envelope-o"></span> <span class="__cf_email__">support@getlocally.in</span>

                            </a>

                            <a href="seller-reg.html">
          Register as a Seller
        </a>
                        </div>
                    </li>
                    <hr/>
                    <li>
                        <a href="quote.php" class="btn btn-info btn-block">
        Create a Need
      </a>
                    </li>

                    <hr/>
                    <li><a href="quote.php">My Request</a></li>
                    <li><a href="">My Favourites</a></li>
                    <li><a href="bidinvite.php">My Bidding Invites</a></li>
                    <li><a href="logout.php">Logout</a></li>

                    <hr/>
                    <li><a href="howitworks.html">How it works</a></li>
                    <li><a href="about.html">About us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="appNotifier"></div>
    <div id="helpTextSection"></div>
    <div id="ouibounce-modal"></div>

    <div id="page-wrapper" style="background-color: white;">
        <div class="clear"></div>

        <div class="title-area">
            <div class="container">

                <ul class="top-menu remove-mar">
                    <li>
                        <a href="quote.php">
							My Request
						</a>
                    </li>

                    <li>
                        <a href="quote.php">
							My Favourites
						</a>
                    </li>
                    <li class="active">
                        <a href="bidinvite.php">
							My Bidding Invites
						</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <!-- <h3 class="text-center page-title">
			<span>
				My Account
				<hr/>
			</span>
		</h3> -->

            <div class="page-content">

                <h1 class="page-title">
<?php echo $brand; ?> <?php echo $pname; ?>
						<small class="pull-right"><a href="bidinvite.php"><span class="fa fa-long-arrow-left"></span>&nbsp;Back to all Bidding Invites</a></small>

				</h1>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="content-block">
                            <div class="rfq-prod-detail">
                                <div class="media">
<?php
include "connect.php";

$get1 = mysqli_fetch_array(mysqli_query($con,"SELECT email,date,pname,brand,location,catogery,pincode FROM quetation WHERE email ='$eid' and pname ='$pname' and brand = '$brand'"));

$catogery  =   $get1['catogery'];
$pincode  =   $get1['pincode'];
$location  =   $get1['location'];
$date  =   $get1['date'];
?>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $brand; ?> <?php echo $pname; ?></h4>
                                        <div class="clear"></div>
                                        <span class="text-muted"><!-- react-text: 12 -->Created At : <?php echo $date; ?></span></div>
                                </div>


                             <dl class="dl-horizontal"><dt>Brand</dt>
                                    <dd><?php echo $brand;?></dd><dt>Category</dt>
                                    <dd><?php echo $catogery;?></dd><dt>Pincode</dt>
                                    <dd><?php echo $pincode;?></dd><dt> Location</dt>
                                    <dd><?php echo $location;?></dd>
                                </dl>

                            </div>
                        </div>
                    </div>


                    <div class="col-sm-8">

                        <table class="table table-hover im-table-v2">
                            <thead>
   <?php

  					$host="localhost";
  		$username="root";
  			$password="";
  			$db_name="getlocally";

  			$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("Your Connection is in error");

  		$sql="SELECT shopname,availablity,delivery,cost,buyemail FROM sellerques WHERE buyemail = '$eid' and pname = '$pname'";

  			$results=mysqli_query($con,$sql);

  			$count=mysqli_num_rows($results);
  			if($count == 0)
  				{
  					echo "<font color=\"#0000\"><h1 align=\"center\">No details found</h1></font>";
  						}
  					else
  				{
  									   $resource=mysqli_query($con,$sql);
  									  ?>


  <tr>
                                    <th>Shop Name</th>
                                    <th>Availbility</th>
                                    <th>Delivery time</th>
                                    <th>Cost</th>
                                    <th></th>


                                </tr>
                            </thead>
                            <tbody>
 <?php
							while($result=mysqli_fetch_array($resource))
								{
								echo "<tr>
								<td>".$result[0]."</td>
								<td>".$result[1]."</td>
                                <td>".$result[2]."</td>
								<td>".$result[3]."</td>
							    </tr>";
								}
							   	}

?>

                        </table>

                    </div>
                </div>






            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="col-md-2 col-sm-2">
                <p class="fnt-wt-big">COMPANY INFO</p>
                <ul class="foot-links">
                    <li><a href="about.html">About us</a></li>
                    <li><a href="howitworks.html">How it Works</a></li>

                </ul>
            </div>
            <div class="col-md-2 col-sm-2">
                <p class="fnt-wt-big">FOR BUYERS</p>
                <ul class="foot-links">

                    <li>
                        <a href="#"></a>
                    </li>
                    <li><a href="">Terms &amp; Conditions</a></li>
                    <li><a href="">Privacy Policy</a></li>

                </ul>
            </div>
            <div class="col-md-2 col-sm-2">
                <p class="fnt-wt-big">FOR SELLERS</p>
                <ul class="foot-links">

                    <li><a href="seller-reg.html">Register as a Seller</a></li>

                    <li><a href="seller-login.html">Seller Login</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-2 col-md-offset-3">
                <a href="#" class="logo-holder"><img src="img/GetLocally.png" /></a>
                <div class="social-links">
                    <a href="https://www.facebook.com" target="_blank"><span class="fa fa-facebook"></span></a>
                    <a href="https://www.instagram.com" target="_blank"><span class="fa fa-instagram"></span></a>
                    <a href="https://www.linkedin.com/" target="_blank"><span class="fa fa-linkedin"></span></a>
                    <a href="https://twitter.com" target="_blank"><span class="fa fa-twitter"></span></a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/vendor.js"></script>
    <script type="text/javascript" src="js/file_upload.js"></script>
    <script type="text/javascript" src="js/basic_vendor.js"></script>
    <script type="text/javascript" src="js/basic_market.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/market_merchandice.js"></script>
    <script type="text/javascript" src="js/market_home.js"></script>
</body>

</html>