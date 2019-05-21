<?php
   //home.php
   session_start();
   if(!isset($_SESSION["username"]))
   {
    header("location: index.php");
   }
   else
   {
	include('db.php');
	$sql = "select * from admin where username = '$_SESSION[username]'";
	$res = mysqli_query($con,$sql);
	
	while($row = mysqli_fetch_array($res))
	{
		$name = $row['name'];
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
    <title>Staff</title>

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
                            <a href="staff.php">
                                <i class="fas fa-sitemap"></i>Staff view</a>
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
                            <a href="staff.php">
                                <i class="fas fa-sitemap"></i>Staff view</a>
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
								<div >
									<div class="card-body">
										<button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#largeModal">
											ADD NEW
										</button>
									</div>
								</div>

								
							<div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>SID</th>
                                                <th>Name</th>
												<th>Gender</th>
												<th>Age</th>
												<th>NIC</th>
												<th>Contact</th>
                                                <th>Address</th>
                                                <th>Designation</th>
												<th>Duty Section</th>
												<th>Duties</th>
												<th>Image</th>
												<th>Update</th>
												<th>Delete</th>
												
												
                                            </tr>
                                        </thead>
                                        <tbody>
										
										<?php
										include 'db.php';
										
										$sql = "select * from staff";
										$res = mysqli_query($con,$sql);
										
										while($row = mysqli_fetch_array($res))
										{
										
											echo "<tr>
													<td>".$row['id']."</td>
													<td>".$row['name']."</td>
													<td>".$row['gender']."</td>
													<td>".$row['age']."</td>
													<td>".$row['nic']."</td>
													<td>".$row['contact']."</td>
													<td >".$row['address']."</td>
													<td>".$row['designation']."</td>
													<td>".$row['dutysec']."</td>
													<td>".$row['duties']."</td>						
													<td><img src=".$row['image']."></td>
													<td><a  class='btn btn-primary' href=editstaff.php?q=".$row['id']." >Update</a></td>
													<td><a  class='btn btn-danger' href=delstaff.php?q=".$row['id']." >Delete</a></td>
												</tr>";
										
										}
										
										?>
                                    
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>						 
                            




							</div>
						</div>
					</div>
				</div>
			</div>
			

			
			<!-- modal large -->
			<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Add Staff</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<div class="card-body card-block">
                                        <form action="" id="form" autocomplete="off"  method="post" enctype="multipart/form-data" class="form-horizontal" >
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Full Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" autocomplete="off" required name="name" placeholder="enter full name" class="form-control">
                                                    
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Gender</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" name="gen" value="Male" class="form-check-input">Male
                                                        </label>
                                                        <label for="inline-radio3" class="form-check-label ">
                                                            <input type="radio" id="inline-radio3" name="gen" value="Female" class="form-check-input">Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
											
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Age</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" autocomplete="off" required name="age" placeholder="enter age" class="form-control">
                                                    
                                                </div>
                                            </div>
											
											
											
											 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">NIC</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nic" placeholder="enter NIC" class="form-control">
                                                    
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="address" id="textarea-input" required rows="9" placeholder="Enter address..." class="form-control"></textarea>
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Contact</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="phone" id="text-input" name="phone" placeholder="enter phone number" class="form-control">
                                                    
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabledSelect" class=" form-control-label">Designation</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select  name="designation" id="disabledSelect"  class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="Warden">Warden</option>
                                                        <option value="Special Force">Special Force</option>
                                                        <option value="Security">Security</option>
														<option value="Cooker">Cooker</option>
                                                    </select>
                                                </div>
                                            </div>
								
                                            
											
											
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabledSelect" class=" form-control-label">Duty Section</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="section" id="disabledSelect"  class="form-control">
                                                        <option value="0">Please select</option>
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
                                                    <textarea name="duty" id="textarea-input" required rows="9" placeholder="Enter remarks..." class="form-control"></textarea>
                                                </div>
                                            </div>
											
																						<div class="form-group">  
											  <label>Select image</label>  
											 <input id="uploadImage" type="file" accept="image/*" name="image"  required/> 
											  <span class="help-block">Allowed File Type - jpg, jpeg, png, gif</span>  
										</div>  
                                        
                                 </div>
                                    
							</p>
						</div>
						<div class="modal-footer">
						
							<button type="button" class="btn btn-secondary" >Cancel</button>
							<input type="submit" name="submit" class="btn btn-primary" > 
						</div>
					  </form>
					</div>
				</div>
			</div>
			<!-- end modal large -->

			

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
    url: "addstaff.php",
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
