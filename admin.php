<?php
    require('connection.inc.php');
    require('function.inc.php');

   if(isset($_SESSION['ADMIN_LOGIN']) && ($_SESSION['ADMIN_LOGIN'] !=''))
   {
       
   }
   else
   {
    header('location:login.php');
    die();
   }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./admin-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
</head>
<body>  
    <section id="sidebar">
           
            <div style="position:relative; top:-2.5rem;"  class="slidebar-brand">
                <img src="./icons/logo.svg">
            </div>
            <div style="position:relative; top:-10.5rem;" class="slidebar-menu">
                <ul>
                    <li>
                        <a  href="admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a  href="categories.php"><i class="fas fa-users"></i><span>Categories</span></a>
                    </li>
                   
                    <li>
                        <a  href="product.php"><i class="fas fa-file-pdf"></i><span>Products</span></a>
                    </li>
                    <li>
                        <a  href="order.php"><i class="fas fa-user"></i><span>Order</span></a>
                    </li>
                    <li>
                        <a  href="user.php"><i class="fas fa-clock"></i><span>User</span></a>
                    </li>
                    <li>
                        <a  href="contact.php"><i class="fas fa-phone"></i><span>Contact us</span></a>
                    </li>
                    <li>
                        <a  onclick="window.location.href='login.php';" href="#"><i class="fas fa-sign-out"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
           
    </section>
    <section id="main-content">
       <header class="main-header">
            <div  class="header-left">
                <h2 class="toogle-btn"><i class="fas fa-bars"></i><span>Dashboard</span></h2>
            </div>
            <div class="header-left">
              <img style="height: 100%;" src="./icons/logo-2.svg">
            </div>
            <div class="header-left">
              <div class="rahul"><img style="height: 100px" src="./images/profile.png" class="img"></div>
                <h3>Freshmeal</h3>
                <p> <?php echo  $_SESSION['name']; ?></p>
                
            </div>
            <div class="clear"></div>
       </header>
       <div class="clear"></div>   
      
       <div class="main-content-info">
        <div class="container">
            <div onclick="window.location.href='subscription.php';" class="card-box magic-shadow">
            <i class="fas fa-user"></i>
             <p onclick="window.location.href='subscription.php';">Subscribe</p>
            </div>
            <div  onclick="window.location.href='order.php';" class="card-box magic-shadow">
            <i class="fas fa-icons"></i>
                     <p  onclick="window.location.href='order.php';">Order</p>
            </div>
            <div onclick="window.location.href='chart.html';" class="card-box magic-shadow">
            <i class="fas fa-inr"></i>
                     <p onclick="window.location.href='chart.html';" >Income</p>
            </div>
            <div  onclick="window.location.href='product.php';" class="card-box magic-shadow">
            <i class="fas fa-laptop"></i>
                     <p  onclick="window.location.href='product.php';">Products</p>
            </div>
            <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div> 
      
          <div class="clear"></div>
           
        <br>
        <section style="position:absolute; left:2rem; margin-top:-5rem; " class="chart">
        <div class="charts">
            <div class="chartss">
                <h2>Earning (Past 06 Months)</h2>
                <canvas id="linechart" width="50px"></canvas>
            </div>
            <div class="chartsss" id="doughnut-chart"> 
                <h2>Food Sale</h2>
                <canvas id="doughnut"></canvas>
            </div>
        </div>
       </section>
            
            <div class="clear"></div>
        </div>
       </section>
    <div class="clear"></div>

    <div class="customer-table">
    <div>
                    <h2 style="float: left; margin-right: 2rem; margin-bottom: 2rem;">All comments</h2>
                    <button style="margin-bottom: 2rem;" class="btn">See All</button>
                   </div> 
                   <div class="clear"></div>
                   <table style="width: 100%;">
                    <tr>
                        <th>Pic</th>
                        <th>Name</th>
                        <th>Contact</th>
                    </tr>
                    <tr>
                        <td><img style="width: 30px;" src="./images/profile.png"></td>
                        <td>Ravi</td>
                        <td><a href="9913351566"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-phone"></i></a>
                            <a href="mailto:dummy@gmail.com"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-envelope"></i></a>
                            <a href="https://goo.gl/maps/8KhZ1dRQ5iFM8JKE9"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-map-marker"></i></a></td>
                    </tr>

                    <tr>
                        <td><img style="width: 30px;" src="./images/profile.png"></td>
                        <td>Deepak</td>
                        <td><a href="9913351566"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-phone"></i></a>
                            <a href="mailto:dummy@gmail.com"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-envelope"></i></a>
                            <a href="https://goo.gl/maps/8KhZ1dRQ5iFM8JKE9"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-map-marker"></i></a></td>
                    </tr>

                    <tr>
                        <td><img style="width: 30px;" src="./images/profile.png"></td>
                        <td>Ankush</td>
                        <td><a href="9913351566"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-phone"></i></a>
                            <a href="mailto:dummy@gmail.com"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-envelope"></i></a>
                            <a href="https://goo.gl/maps/8KhZ1dRQ5iFM8JKE9"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-map-marker"></i></a></td>
                    </tr>

                    <tr>
                        <td><img style="width: 30px;" src="./images/profile.png"></td>
                        <td>Rahul</td>
                        <td><a href="9913351566"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-phone"></i></a>
                            <a href="mailto:dummy@gmail.com"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-envelope"></i></a>
                            <a href="https://goo.gl/maps/8KhZ1dRQ5iFM8JKE9"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-map-marker"></i></a></td>
                    </tr>

                    <tr>
                        <td><img style="width: 30px;" src="./images/profile.png"></td>
                        <td>Kishan</td>
                        <td><a href="9913351566"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-phone"></i></a>
                            <a href="mailto:dummy@gmail.com"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-envelope"></i></a>
                            <a href="https://goo.gl/maps/8KhZ1dRQ5iFM8JKE9"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img style="width: 30px;" src="./images/profile.png"></td>
                        <td>Vinit</td>
                        <td><a href="9913351566"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-phone"></i></a>
                            <a href="mailto:dummy@gmail.com"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-envelope"></i></a>
                            <a href="https://goo.gl/maps/8KhZ1dRQ5iFM8JKE9"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img style="width: 30px;" src="./images/profile.png"></td>
                        <td>Nishant</td>
                        <td><a href="9913351566"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-phone"></i></a>
                            <a href="mailto:dummy@gmail.com"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-envelope"></i></a>
                            <a href="https://goo.gl/maps/8KhZ1dRQ5iFM8JKE9"><i style="color: #eebf00; padding-right: 8px;" class="fas fa-map-marker"></i></a></td>
                    </tr>
                    
                   </table> 

    </div>


       <script type="text/javascript" src="./jquery.js"></script>
       <script type="text/javascript" src="./admin.style.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
        <script type="text/javascript" src="./chart.js"></script>
        <script type="text/javascript" src="./chartrahul.js"></script>
</body>
</html>