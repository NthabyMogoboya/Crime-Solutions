<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
             integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Court Act Solution</title>
</head>
<body style= "background-image: url('images/bg_1.jpg');" >
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class=" border-right" id="sidebar-wrapper">
  <br>
  <div class="sidebar-heading"><h3 style="color:white;">Crime Acts Solution</h></div>
    
  <div class="list-group list-group-flush">
    <a href="victim_dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
    <a href="reportcrime.php" class="list-group-item list-group-item-action">Report Crime</a>
    <a href="victimprofile.php" class="list-group-item list-group-item-action">Profile</a>
    <a href="msg.php" class="list-group-item list-group-item-action">Notifications</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg nav border-bottom">
      <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Log Out</a>
          </li>
          
        </ul>
      </div>
    </nav>

  <div class="container-fluid">
    
      <main role="main" class="container">
      <h4 style="text-align: center; color:white; font-size: 30px;">Personal Information | <!--? php            $visitor = $_SESSION['username'];
           if ($user == $visitor)
{ ?-->            <a href="edit-profile.php">Edit Profile</a> </h4>
<strong><table>              
                    <div >
  <div class="row">
    <div class="col-*-*">
    <tr><td style="font-size: 25px; color: white; ">Name:</td><td></td>   
                    </tr>
                    
    </div>
    <div class="col-*-*"></div>
  </div>
  <div class="row">

    <div class="col-*-*"><tr>                
                     <td style="font-size: 25px; color: white; ">ID No:</td><td></td> 
                    </tr> 
                    </div>
    <div class="col-*-*"></div>
  </div>
<br>
  <div class="row">

    <div class="col-*-*"><tr>
                      <td style="font-size: 25px; color: white; ">Gender:</td><td></td>
                    </tr>
                    
                    <br></div>
    <div class="col-*-*"></div>
  </div>

  <div class="row">

    <div class="col-*-*"><tr>
                      <td style="font-size: 25px; color: white; ">City:</td><td><!--?php echo $profile_data['address'] ?--></td> 
                    </tr>
                   
                   </div>
    <div class="col-*-*"></div>
  </div>

  <div class="row">

    <div class="col-*-*"> <tr>                
                     <td style="font-size: 25px; color: white; ">E-mail:</td><td></td>  
                     <tr> 
                       </div>
    <div class="col-*-*"></div>
  </div>

  <div class="row">

    <div class="col-*-*"><tr><td style="font-size: 25px; color: white; ">Phone Number:</td></tr>  
                   
                      </div>
    <div class="col-*-*"></div>
  </div>

  
</div>

        </table> </strong>
       
    </main>
  </div>
  <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
        
</body>
</html>