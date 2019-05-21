<?php
   //home.php
   session_start();
   if(!isset($_SESSION["username"]))
   {
    header("location: index.php");
   }

include ('db.php');
if(isset($_GET['q']))
{
	$id = $_GET['q'];
	$sql= "select * from staff;";
	$res = mysqli_query($con,$sql);
	
	
	while($row= mysqli_fetch_array($res))
	{
		
													$id = $row['id'];
													$name = $row['name'];
													$age = $row['age'];
													$gen = $row['gender'];
													$nic = $row['nic'];
													$address = $row['address'];
													$contact = $row['contact'];
													$designation = $row['designation'];
													$section = $row['dutysec'];
													$duty = $row['duties'];
													
	}
	
	
	
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Prisoner</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="home.php">
                            <?php echo $_SESSION["username"]; ?>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active" >
                            <a href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="prisoner.php">
                                <i class="fas fa-chart-bar"></i>Prisoner view</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->


        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a  href="home.php">
                            <?php echo $_SESSION["username"]; ?>
                        </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li  >
                            <a  href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="prisoner.php">
                                <i class="fas fa-chart-bar"></i>Prisoner view</a>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
                       <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">

                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $name;?> </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="index.php"><?php echo $name;?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION["username"];?></span>
                                                </div>
                                            </div>
                                           
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

           <!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								

								
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Prisoner</strong> Details
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" id="form" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                
                                                <div class="col-12 col-md-9">
                                                    <input type="hidden" id="text-input" name="id" value="<?php echo $id; ?>" class="form-control">
                                                   
                                                </div>
                                            </div>
											
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" value="<?php echo $name; ?>" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Age</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="email-input" name="age" value="<?php echo $age; ?>" class="form-control">
                                                   
                                                </div>
                                            </div>
                                             
											 
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Gender</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                      <?php 
													  $ck="";
													  $c="";
													  
													  if($gen =="Male")
													  {
														$ck = "checked";
													  }
													  elseif($gen =="Female")
													  {
														$c = "checked";
													  }
													  
													  
													  ?>
													   
														<div class="radio">
                                                            <label for="radio3" class="form-check-label ">
                                                                <input type="radio" id="radio3" name="gen" value="Male" <?php echo $ck; ?> class="form-check-input">Male
                                                            </label>
                                                        </div>
														
														<div class="radio">
                                                            <label for="radio3" class="form-check-label ">
                                                                <input type="radio" id="radio3" name="gen" value="Female" <?php echo $c; ?> class="form-check-input">Female
                                                            </label>
                                                        </div>
                                                       
                                                        
                                                    </div>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">NIC</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nic" value="<?php echo $nic; ?>" class="form-control">
                                                   
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="address" id="textarea-input" rows="9" class="form-control"><?php echo $address; ?></textarea>
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Contact</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="phone" id="text-input" name="contact" value="<?php echo $contact; ?>" class="form-control">
                                                   
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabledSelect" class=" form-control-label">Designation</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select  name="desgination" id="disabledSelect"  class="form-control">
                                                        <option value="<?php echo $designation; ?>"><?php echo $designation; ?></option>
                                                        <option value="Warden">Warden</option>
                                                        <option value="Special Force">Special Force</option>
                                                        <option value="Security">Security</option>
														<option value="Cooker">Cooker</option>
													
                                                    </select>
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabledSelect" class=" form-control-label">Section</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select  name="section" id="disabledSelect"  class="form-control">
													 
                                                        <option value="<?php echo $section; ?>"> <?php echo $section; ?></option>
                                                        <option value="SEC1">SEC1</option>
                                                        <option value="SEC2">SEC2</option>
                                                        <option value="SEC3">SEC3</option>
														<option value="SEC4">SEC4</option>
														<option value="SEC5">SEC5</option>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Duties</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="duty" id="textarea-input" rows="9" class="form-control"><?php echo $duty; ?></textarea>
                                                </div>
                                            </div>
                                           
											
											
                                            
											
											<div class="form-group">  
											  <label>Select Image</label>  
											 <input id="uploadImage" type="file" accept="image/*" name="image"/> 
											  <span class="help-block">Allowed File Type - jpg, jpeg, png, gif</span>  
										</div> 
                                           
                                           
                                           
                                       
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="submit" name="submit" class="btn btn-primary" > 
                                    </div>
								   </form>
                                </div>
                                
                            </div>
							                            




							</div>
						</div>
					</div>
				</div>
			</div>
			

			
			
			

		</div>
		<!-- END PAGE CONTAINER-->
		
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<script>
$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
    url: "upstaff.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
		alert(data);
		window.location.href = "staff.php";
		
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
</script> 
