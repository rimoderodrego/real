<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Kuponhub- Responsive Coupons and discounts bootstrap template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="" name="description" />
      <meta content="Kupons" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link rel="shortcut icon" href="#">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
      <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/animsition.min.css" rel="stylesheet" type="text/css">
      <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css">
      <!-- Theme styles -->
      <link href="assets/css/style.css" rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <![endif]-->
   </head>
   <body>
      <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!-- Navigation Bar-->
        <!-- Navigation ends -->
         <?php include 'Header.php' ?>
         
         <section class="results">
            <div class="dp-header">
               <div class="container">
                  <div class="row fillmeFBlight ">
                     <div class="col-md-8 dph-info ">
                        <img src="assets/images/gtaV.jpg" class="profile-img" alt="">
                        <div >
                           <h4>Grand Theft Auto 5 V Brand New Sealed!</h4>
                           <p>Platform:	Sony PlayStation 4
                              <br>
                              Brand New: An item that has never been opened or removed from the manufacturer’s sealing (if applicable). Item is in original shrink wrap (if applicable). See the seller's listing for full details.
                           </p>
                           <a href="#">View</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="widget categories b-b-0">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              All Categories
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                           <!-- Sidebar navigation -->
                           <ul class="nav sidebar-nav">
                              <li class="dropdown">
                                 <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown"> <i class="ti-car">
                                 </i> Cars & Vehicles <span class="sidebar-badge">
                                 12
                                 </span> <b class="caret">
                                 </b> </a>
                                 <ul class="dropdown-menu">
                                    <li> <a href="#" tabindex="-1">
                                       Cars
                                       <span class="sidebar-badge">
                                       120
                                       </span>
                                    </a>
                                    </li>
                                    <li> <a href="#" tabindex="-1">
                                          Auto parts
                                       <span class="sidebar-badge">
                                       130
                                       </span>
                                       </a>
                                    </li>
                                    <li> <a href="#" tabindex="-1">
                                          Motor Bikes & Scooters
                                       <span class="sidebar-badge">
                                       120
                                       </span>
                                       </a>
                                    </li>
                                    <li> <a href="#" tabindex="-1">
                                          Heavy Vehicle
                                       <span class="sidebar-badge">
                                       120
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="#"> <i class="ti-desktop">
                                 </i> Electronics <span class="sidebar-badge">
                                 3
                                 </span> </a>
                              </li>
                              <li>
                                 <a href="#"> <i class="ti-heart">
                                 </i> Fashion ,Health & Beauty <span class="sidebar-badge badge-circle">
                                 12
                                 </span> </a>
                              </li>
                              <li>
                                 <a href="#"> <i class="ti-home">
                                 </i> Property <span class="sidebar-badge badge-circle">
                                 45
                                 </span> </a>
                              </li>
                              <li>
                                 <a href="#"> <i class="ti-basketball">
                                 </i> Hobby ,Sport & Kids <span class="sidebar-badge badge-circle">
                                 117
                                 </span> </a>
                              </li>
                              <li>
                                 <a href="#"> <i class="ti-bar-chart">
                                 </i> Business Services & Industry <span class="sidebar-badge badge-circle">
                                 117
                                 </span> </a>
                              </li>
                           </ul>
                           <!-- Sidebar divider -->
                        </div>
                     </div>
                  </div>
                  <!--/col -->
                  <div class="col-sm-9">
                     <div class="widget-body">
                        <div class="widget">
                           <ul class="nav nav-tabs solo-nav responsive-tabs" id="myTab">
                              <li class=""><a data-toggle="tab"><i class=" ti-search"></i>Showing results 12 of 340050</a> </li>
                           </ul>
                        </div>
                     </div>
                     <!--/widget -->
                     <!-- Tab panes -->
                     <div class="tab-content">
                       
                        <?php include'Item_template.php'?>
                        <?php include'Item_template.php'?>
                        <?php include'Item_template.php'?>
                        <?php include'Item_template.php'?>
                        <?php include'Item_template.php'?>
                        <?php include'Item_template.php'?>
                        <?php include'Item_template.php'?>
                        <?php include'Item_template.php'?>
                        <?php include'Item_template.php'?>
                        <?php include'Item_template.php'?>
                     </div>

                     <ul class="pagination pagination-lg m-t-0">
                        <li>
                           <a href="#"> <i class="ti-arrow-left"></i> </a>
                        </li>
                        <li> <a href="#">1</a> </li>
                        <li class="active"> <a href="#">2</a> </li>
                        <li> <a href="#">3</a> </li>
                        <li> <a href="#">4</a> </li>
                        <li>
                           <a href="#"> <i class="ti-arrow-right"></i> </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <!-- Footer -->
         <?php include 'Footer.php'?>
         <!-- start modal -->
        <!-- Large modal -->

         <?php include 'Popup_Login.php' ?>
         
                  <!-- end: Coupon modal content -->
               </div>


         <!-- end: Modall -->
      </div>
      <!-- //wrapper -->
      <!-- jQuery  -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/animsition.min.js"></script>
      <script src="owl.carousel/owl.carousel.min.js"></script>
      <!-- Kupon js -->
      <script src="assets/js/kupon.js"></script>
   </body>
</html>