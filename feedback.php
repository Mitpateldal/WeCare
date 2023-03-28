<html><?php
include "connect.php";
$sql_list="SELECT * FROM feedback";
$result=mysqli_query($conn,$sql_list);
?>


<html>
<head>

<title>
    Complaints
</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
<script>
$(function () {
    $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
    if (!screenfull.enabled) {
        return false;
    }
    $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
    });
});
</script>
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->



</head>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1> <a class="navbar-brand" href="#">WE CARE</a></h1>   
        </div>
        <div class=" border-bottom">
            <div class="full-left">
                <section class="full-top">
                    <button id="toggle">
                        <i class="fa fa-arrows-alt"></i>
                    </button>   
                </section>
                <div class="clearfix"> </div>
           </div>
            <div class="drop-men" >
                <ul class=" nav_1">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle dropdown-at"
                         data-toggle="dropdown">
                        <span class=" name-caret">Admin 
                            <i class="caret"></i>
                        </span>
                        <img src="images/wo.jpg" height="60px" width="60px">
                      </a>
                      <ul class="dropdown-menu " role="menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>Edit Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-edit"></i>Change Password
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-lock"></i>Logout
                            </a>
                        </li>
                      </ul>
                    </li>
                </ul>
             </div><!-- /.navbar-collapse -->


<div class="clearfix"></div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="servicepersonaldetails.php" class=" hvr-bounce-to-right">
                                <i class="fa fa-dashboard nav_icon ">
                                </i>
                                <span class="nav-label">Service personal
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="userdetails.php" class=" hvr-bounce-to-right">
                                <i class="fa fa-bold nav_icon"></i> 
                                <span class="nav-label">User
                                </span><span class="fa arrow"></span>
                            </a>

                        </li>
                        <li>
                            <a href="bookingdetails.html" class=" hvr-bounce-to-right">
                                <i class="fa fa-sort nav_icon ">
                                </i>
                                <span class="nav-label">Booking
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="feedbackdetails.php" class=" hvr-bounce-to-right">
                                <i class="fa fa-comment nav_icon ">
                                </i>
                                <span class="nav-label">Feedback
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" class=" hvr-bounce-to-right">
                                <i class="fa fa-lock nav_icon ">
                                </i>
                                <span class="nav-label">Logout
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main">
        <!--banner-->   
        <div class="banner">
             <h1>
                <center>Feedback Details</center>
            </h1><hr>
            
 <div class="table-responsive">
                <table class="table table-bordered">
                                     <tr>
                                        <th>Feedback id</th>
                                        <th>Feedback date</th>
                                        <th>User id</th>
                                        <th>Special id</th>
                                        <th>Feedback comment</th>
                                        <th>Feedback rating</th>
                                        <th>action</th>

                                       
                                      <?php

while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
{
?>
                                     <tr>
                                       
                                        <td><?php    echo $row['f_id'];       ?></td>
                                        <td><?php    echo $row['f_date'];     ?></td>
                                        <td><?php    echo $row['u_id'];       ?></td>
                                        <td><?php    echo $row['sp_id'];      ?></td>
                                        <td><?php    echo $row['f_comment'];  ?></td>
                                        <td><?php    echo $row['f_rating'];   ?></td>
                                        <td><a href=""> Remove </a> </td>
                                    </tr>                             

  <?php } ?>    
                                </table>

        				              </div>
        </div>
   
   
          
        <!--//banner-->
       
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<script src="js/bootstrap.min.js"> </script>
</body>
</html>


