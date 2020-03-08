<!DOCTYPE php>
<php lang="en">
  <head>
    <title>Crime Act Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php 
    
        include_once 'database.php'; 


    ?>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Crime Act Solutions</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="practice-areas.php" class="nav-link">Practice Areas</a></li>
	          <li class="nav-item"><a href="attorneys.php" class="nav-link">Crime Categories</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">The Law, My Right!</h2>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            	<span>Rights</span> . <span>Innovation</span> . <span>Excellence</span>
            </h1>
            <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
				Sign-In
			  </button></a></p>
			<p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Registration">
				Sign-Up
			  </button></a></p>
          </div>
        </div>
      </div>
	</div>
	<!--  -->
	

	<!--  -->
    <section class="ftco-section ftco-no-pb services-section">

      <div class="container">
        <div class="row no-gutters d-flex">
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-auction"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Get Your Legal Advice</a></h3>
              <p>your legal issue, solve your problem. C.A.S helps people of low and moderate incomes find free legal aid programs in their communities.</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-lawyer"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Work with Expert Lawyers</a></h3>
              <p>One way to work with a lawyer is to turn over your entire legal issue and rely on the lawyer to handle things.</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-money"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Have Great Discounted Rates</a></h3>
              <p>It can get expensive if you don't know where and how to find the best deals. That's where we can help!</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="ion-ios-help-circle-outline"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Review Your Case Documents</a></h3>
              <p>All case evaluations are performed by you and a participating attorney.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
   	
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Practice Areas</h2>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-family"></span>
        			</div>
        			<h3><a href="#">Family Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-auction"></span>
        			</div>
        			<h3><a href="#">Business Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-shield"></span>
        			</div>
        			<h3><a href="#">Insurance Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-handcuffs"></span>
        			</div>
        			<h3><a href="#">Criminal Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-house"></span>
        			</div>
        			<h3><a href="#">Property Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-employee"></span>
        			</div>
        			<h3><a href="#">Employment Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-fire"></span>
        			</div>
        			<h3><a href="#">Fire Accident</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-money"></span>
        			</div>
        			<h3><a href="#">Financial Law</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-medicine"></span>
        			</div>
        			<h3><a href="#">Drug Offenses</a></h3>
        		</div>
        	</div>
        	<div class="col-md-3 col-lg-2 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-handcuffs"></span>
        			</div>
        			<h3><a href="#">Sexual Offenses</a></h3>
        		</div>
        	</div>
        </div>
    	</div>
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <p><a href="practice-areas.php.]" class="btn btn-primary py-3 px-5">Learn More</a></p>
          </div>
        </div>
    </section>

    <section class="ftco-section bg-secondary">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Crime Categories</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_1.jpg);">
	                <div class="box">
	                  <h2>Richard Anderson</h2>
	                  <p>Civil Lawyer</p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="images/person_1.jpg" alt="">
	                  </div>
	                  <div class="name align-self-center">Richard Anderson <span class="position">Civil Lawyer</span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_2.jpg);">
	                <div class="box">
	                  <h2>Jefford Maxillin</h2>
	                  <p>Business Lawyer</p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="images/person_2.jpg" alt="">
	                  </div>
	                  <div class="name align-self-center">Jefford Maxillin<span class="position">Business Lawyer</span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_3.jpg);">
	                <div class="box">
	                  <h2>Carlos Obing</h2>
	                  <p>Criminal Defense</p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="images/person_3.jpg" alt="">
	                  </div>
	                  <div class="name align-self-center">Carlos Obing <span class="position">Criminal Defense</span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_4.jpg);">
	                <div class="box">
	                  <h2>Nathan Smith</h2>
	                  <p>Insurance Lawyer</p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <img src="images/person_4.jpg" alt="">
	                  </div>
	                  <div class="name align-self-center">Nathan Smith <span class="position">Insurance Lawyer</span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
		
        </div>
    	</div>
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <p><a href="#" class="btn btn-primary py-3 px-5">View More</a></p>
          </div>
        </div>
    </section>

		<!-- Reg Form -->
<div class="modal fade" id="Registration" tabindex="-1" role="dialog" aria-labelledby="icepRegisterUser"
    aria-hidden="true">
    <div class="modal-dialog modal-ls" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title ">Registration</h5>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" formControlName="fname" required class="form-control"
                            placeholder="Enter Your First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" formControlName="lname" required class="form-control"
                            placeholder="Enter Your Last Name">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" formControlName="lname" required class="form-control"
                            placeholder="Enter Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" formControlName="lname" required class="form-control"
                            placeholder="Enter Your City">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" formControlName="email" required class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter your Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" formControlName="pword" required class="form-control"
                                    placeholder="Enter Secret Password">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" formControlName="pword2" required class="form-control"
                                    placeholder="Re-enter Secret Password">
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn" >Submit</button> 
                    <a href="login" class="btn btn-link">Login here</a> 
                    <!-- (click)="postApplication() -->
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal end -->
<!-- reg form end -->
<!-- login -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="icepRegisterUser"
    aria-hidden="true">
    <div class="modal-dialog modal-ls" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title ">Login</h5>
            </div>
            <form method="post" action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" formControlName="email" required class="form-control" aria-describedby="emailHelp"
                           name="mail" placeholder="Enter your Email">
                    </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" formControlName="pword" required class="form-control"
                                   name="password" placeholder="Enter Secret Password">
                            </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" name="login" class="btn" value="Login">Login</button>
                    <a href="" class="btn btn-link">Register here</a> 
                    <!-- (click)="postApplication() -->
                </div>
            </form>
        </div>
    </div>
</div>
<?php

if(isset($_POST['login'])){
    $mail = isset($_POST['mail']) ? $_POST['mail']: "";
    $pass = isset($_POST['password']) ? $_POST['password'] : "";
    
    $q = "SELECT * FROM admin WHERE email='$mail' AND password='$pass'";
    
    $res = mysqli_query($conn, $q);
    
    if($res->num_rows > 0){
        $user_details = $res->fetch_object();
        $user_id = $user_details->id;
        //$_SESSION['id'] = $user_id;
        
        header("Location: victim_dashboard.php");
    } else {?>
        <p class="error">Username and/or Password is incorrect</p>
   <?php }
}

?>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-2">

          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
  Copyright Icep_IBM &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
          </div>
        </div>
      </div>
    </footer>
    
  


	<!-- Modal -->
<!-- lunch button uses id as referrence -->
<div class="modal fade" id="Registration" tabindex="-1" role="dialog" aria-labelledby="icepRegisterUser"
aria-hidden="true">
<div class="modal-dialog modal-ls" role="document">
	<div class="modal-content">
		<div class="modal-header text-light justify-content-center">
			<h5 class="modal-title ">C.A.S Registration</h5>
		</div>
		<form>
			<div class="modal-body">

				<div class="form-group">
					<!-- <label>First Name</label> -->
					<input type="text" formControlName="fname" required class="form-control"
						placeholder="Enter Your First Name">
				</div>

				<div class="form-group">
					<!-- <label>Last Name</label> -->
					<input type="text" formControlName="lname" required class="form-control"
						placeholder="Enter Your Last Name">
				</div>


				<div class="form-group">
					<!-- <label>Email address</label> -->
					<input type="email" formControlName="email" required class="form-control" aria-describedby="emailHelp"
						placeholder="Enter your Email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
						else.</small>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<!-- <label>Password</label> -->
							<input type="password" formControlName="pword" required class="form-control"
								placeholder="Enter Secret Password">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<!-- <label>Confirm Password</label> -->
							<input type="password" formControlName="pword2" required class="form-control"
								placeholder="Re-enter Secret Password">
						</div>
					</div>
				</div>


			   
			</div>
			<div class="modal-footer justify-content-center">
				<button type="submit" class="btn " >Submit</button> 
				<a class="btn btn-link" data-toggle="modal" data-target="#login">Login here</a> 
				<!-- (click)="postApplication() -->
			</div>
		</form>
	</div>
</div>
</div>

<!-- Modal end -->

<!-- Modal -->
    <!-- lunch button uses id as referrence -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="icepRegisterUser"
        aria-hidden="true">
        <div class="modal-dialog modal-ls" role="document">
            <div class="modal-content">
                <div class="modal-header text-light justify-content-center">
                    <h5 class="modal-title ">C.A.S Login</h5>
                </div>
                <form>
                    <div class="modal-body">
    
                        <div class="form-group">
                            <!-- <label>Email address</label> -->
                            <input type="email" formControlName="email" required class="form-control" aria-describedby="emailHelp"
                                placeholder="Enter your Email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <!-- <label>Password</label> -->
                                    <input type="password" formControlName="pword" required class="form-control"
                                        placeholder="Enter Secret Password">
                                </div>
                            </div>
                           
                        </div>
    
    
                       
                    </div>
                    
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn" >Login</button> 
                            <!-- <a href="application">Apply For ICEP</a>  -->
                        </div>           
                </form>
            </div>
        </div>
    </div>
    
    <!-- Modal end -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</php>