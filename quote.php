<?php


$eid  =   $get['Email'];

}
else
{
	echo "<script>";
	echo "alert('Error.');
	             window.location.href='signin.html';

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
                        <a href="quote.html" class="btn btn-info btn-block">
        Create a Need
      </a>
                    </li>

                    <hr>
                    <li><a href="quote.html">My Request</a></li>
                    <li><a href="">My Favourites</a></li>
                    <li><a href="bidinvite.html">My Bidding Invites</a></li>
                    <li><a href="logout.php">Logout</a></li>

                    <hr>
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
                    <li class="active">
                        <a href="quote.php">
							My Request
						</a>
                    </li>

                    <li>
                        <a href="quote.php">
							My Favourites
						</a>
                    </li>
                    <li>
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


                <h1 class="page-title text-center">
					Create a Need


				</h1>


                <div class="row">


                    <div class="row">
                        <form method="POST" action="quotereg.php">
                            <div class="col-md-12 section-header">
                                <h5>PRODUCT SPECIFICATION</h5></div>
                            <div class="col-md-3">
                                <div class="form-group">

                                    <input type="text" label="Name of the Product" class="full-input form-control" placeholder="Product Name" name="productname">

                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">

                                    <input type="text" label="Brand" class="full-input form-control" placeholder="Brand" name="brand">

                                </div>
                            </div>

                            <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="binding_type" class="">
                                            react-text: 68Binding type
                                            /react-text<span class="error"></span><span>react-text: 71&nbsp;/react-text<a href="javascript:;"><span class="fa fa-question-circle"></span></a>
                                            </span>
                                        </label>
                                        <select type="select" label="Binding type" class="full-input form-control">
                                            <option value="Pin Binding ">Pin Binding </option>
                                            <option value="Perfect Binding">Perfect Binding</option>
                                            <option value="Spiral binding">Spiral binding</option>
                                            <option value="Wiro binding">Wiro binding</option>
                                        </select>
                                    </div>
                                </div> -->
   <div class="col-md-12 section-header">
                                <h5>CATOGERY</h5></div>
                            <div class="col-md-3">
                                <div class="form-group">

                                    <select type="select" label="Location" class="full-input form-control"  name="catogery">
                                        <option value="Computers">Computers</option>
                                        <option value="Laptops">Laptops</option>
                                        <option value="Mobiles">Mobiles</option>
                                        <option value="Cameras">Cameras</option>
                                        <option value="Printers">Printers</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 section-header">
                                <h5>LOCATION</h5></div>
                            <div class="col-md-3">
                                <div class="form-group">

                                    <select type="select" label="Location" class="full-input form-control"  name="location">
                                        <option value="vellore">Vellore</option>
                                        <option value="tiruvanamalai">Tiruvannamalai</option>
                                        <option value="chennai">Chennai</option>
                                        <option value="salem">Salem</option>
                                        <option value="coimbatore">Coimbatore</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">

                                    <input type="text" label="Pincode"  name ="pincode" class="full-input form-control" placeholder="Pincode">

                                </div>
                            </div>
                            <div class="col-md-12 section-header">
                                <h5>Product Image</h5></div>
                            <div class="col-md-3">
                                <div class="form-group">

                                    <div style="position: relative;">
                                        <button class="btn btn-block btn-default" style="z-index: 1;"><span class="icon-upload22"></span>
                                            <!-- react-text: 120 -->&nbsp;Upload
                                            <!-- /react-text -->
                                            <!-- react-text: 121 -->
                                            <!-- /react-text -->
                                        </button>
                                        <div class="im-uploaded-list"></div>
                                        <div id="html5_1bank2b5qjd736cpqvpf31e6j3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 263px; height: 31px; overflow: hidden; z-index: 0;">
                                            <input id="html5_1bank2b5qjd736cpqvpf31e6j3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="",name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 section-header">
                                <h5>Anything extra you need to tell the sellers about the product?</h5></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="productSpecification" class="">
                                        <!-- react-text: 128 -->Extra Description
                                        <!-- /react-text --><span class="error"></span></label>
                                    <textarea label="Extra Description" type="textarea" rows="4" name = "desc" class="full-input form-control"></textarea>
                                    <grammarly-btn>
                                        <div style="visibility: hidden; z-index: 2;" class="_e725ae-textarea_btn _e725ae-not_focused" data-grammarly-reactid=".0">
                                            <div class="_e725ae-transform_wrap" data-grammarly-reactid=".0.0">
                                                <div title="Protected by Grammarly" class="_e725ae-status" data-grammarly-reactid=".0.0.0">&nbsp;</div>
                                            </div>
                                        </div>
                                    </grammarly-btn>
                                </div>
                            </div>

                            <div class="col-md-12"></div>
                            <div class="col-md-12">
                                <button class="btn btn-block btn-primary btn-lg">
                                    <!-- react-text: 176 -->Submit &nbsp;
                                    <!-- /react-text --><span class="fa fa-long-arrow-right"></span></button>
                            </div>
                        </form>
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