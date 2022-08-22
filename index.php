<?php
// session_start();
error_reporting(0);
include("includes/config.inc.php");
$Menu  = $_REQUEST['Menu'];
$Submenu = $_REQUEST['Submenu'];
if ($Menu == "1") {
  $selected2 = "class='selected'";
  if ($Submenu == "inforcustomer") {
    $Fileshow = "inforcustomer.php";
  } 
  else if ($Submenu == "datecustomer") {
    $Fileshow = "customeruser/datecustomer.php";
  }
  else if ($Submenu == "inforserve") {
    $Fileshow = "inforserve.php";
  }
  else if ($Submenu == "servedate") {
    $Fileshow = "customer/servedate.php";
  }
  else if ($Submenu == "inforaccess") {
    $Fileshow = "inforaccess.php";
  }
  else if ($Submenu == "customeruser") {
    $Fileshow = "customeruser/createcustomeruser.php";
  }
  else if ($Submenu == "editcustomeruser") {
    $Fileshow = "customeruser/editcustomeruser.php";
  }
  else if ($Submenu == "createservedate") {
    $Fileshow = "customer/createservedate.php";
  }
  else if ($Submenu == "inforsection") {
    $Fileshow = "inforsection.php";
  }
  else if ($Submenu == "createsection") {
    $Fileshow = "sectionserve/createsection.php";
  }
  else if ($Submenu == "infordetails") {
    $Fileshow = "infordetails.php";
  }
  else if ($Submenu == "createdetails") {
    $Fileshow = "particulars/createdetails.php";
  }
 
} else if ($Menu == "2") {
  $selected2 = "class='selected'";
  if ($Submenu == "newuser") {
    $Fileshow = "user/newuser.php";
  } else if ($Submenu == "appointment") {
    $Fileshow = "appointment.php";
  }
} else if ($Menu == "3") {
  $selected3 = "class='selected'";
  if ($Submenu == "meet") {
    $Fileshow = "meet.php";
  }
} else if ($Menu == "4") {
  $selected4 = "class='selected'";
  if ($Submenu == "law") {
    $Fileshow = "law.php";
  } else if ($Submenu == "imperative") {
    $Fileshow = "imperative.php";
  } else if ($Submenu == "labor") {
    $Fileshow = "labor.php";
  }
} else if ($Menu == "5") {
  $selected4 = "class='selected'";
  if ($Submenu == "comment") {
    $Fileshow = "comment.php";
  } else if ($Submenu == "qa") {
    $Fileshow = "qa.php";
  }
} else {
  $Fileshow = "news2.php";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <title>Welcome</title>
  <!-- Favicon-->
  <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />

  <!-- Bootstrap Core Css -->
  <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

  <!-- Waves Effect Css -->
  <link href="plugins/node-waves/waves.css" rel="stylesheet" />

  <!-- Animation Css -->
  <link href="plugins/animate-css/animate.css" rel="stylesheet" />

  <!-- Morris Chart Css-->
  <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

  <!-- Custom Css -->
  <link href="css/style.css" rel="stylesheet" />

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
  <!-- Page Loader -->
  <!-- <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Please wait...</p>
    </div>
  </div> -->
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  <!-- Search Bar -->
  <div class="search-bar">
    <div class="search-icon">
      <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING..." />
    <div class="close-search">
      <i class="material-icons">close</i>
    </div>
  </div>
  <div class="content">
    <?
    include($Fileshow);
    ?>

  </div>
  <!-- #END# Search Bar -->
  <!-- Top Bar -->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="index.html">ADMIN SYSTEM </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          </a></ul>
      </div>

      <!-- #Top Bar -->
      <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
          <!-- User Info -->
          <div class="user-info">
            <div align="center">
              <img src="images/sss.png" width="130" height="125" alig='center' alt="Logo" />
            </div>

          </div>
          <!-- #User Info -->
          <!-- Menu -->
          <div class="menu">
            <ul class="list">

              <a href="#" class="menu-toggle">
                <span>บริหารข้อมูลพื้นฐาน</span>
              </a>
              <ul class="ml-menu">
                <li>
                  <a class="sub-menu" onclick="location. href='index.php?Menu=1&Submenu=inforcustomer';">ข้อมูลลูกค้า </a>
                </li>
                <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <span>ข้อมูลงานบริการ</span>
                  </a>
                  <ul class="ml-menu">
                    <li>
                      <a href="index.php?Menu=1&Submenu=inforserve">ประเภทบริการ/วิจัย</a>
                    </li>
                    <li>
                      <a href="index.php?Menu=1&Submenu=inforsection">หัวข้อบริการ/วิจัย</a>
                    </li>
                    <li>
                      <a href="index.php?Menu=1&Submenu=infordetails">รายละเอียดงานบริการ/วิจัย</a>
                    </li>

                  </ul>
                </li>
                <li>
                  <a class="sub-menu" onclick="location. href='index.php?Menu=1&Submenu=inforaccess';">สิทธิเข้าใช้งาน</a>
                </li>
              </ul>
              </li>
              <li>
                <a href="#" class="menu-toggle">
                  <span>รายงาน</span>
                </a>
                <ul class="ml-menu">
                  <li>
                  <a class="sub-menu" onclick="location. href='index.php?Menu=2&Submenu=newuser';">ข้อมูลผู้สนใจบริการใหม่</a>
                  </li>
                  <li>
                    <a href="#">สถานะของงาน</a>
                  </li>
                  <li>
                    <a href="#">ยอดเงินที่ชำระ</a>
                  </li>
                  <li>
                    <a href="#">รายงานผู้เข้าใช้บริการ</a>
                  </li>
                  <li>
                    <a href="#">รายงานข้อมูลลูกค้า</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <span>ส่งออกรายงาน</span>
                </a>
              </li>
            </ul>
            </li>
            <li>


              <!-- Jquery Core Js -->
              <script src="plugins/jquery/jquery.min.js"></script>

              <!-- Bootstrap Core Js -->
              <script src="plugins/bootstrap/js/bootstrap.js"></script>

              <!-- Select Plugin Js -->
              <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

              <!-- Slimscroll Plugin Js -->
              <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

              <!-- Waves Effect Plugin Js -->
              <script src="plugins/node-waves/waves.js"></script>

              <!-- Jquery CountTo Plugin Js -->
              <script src="plugins/jquery-countto/jquery.countTo.js"></script>

              <!-- Morris Plugin Js -->
              <script src="plugins/raphael/raphael.min.js"></script>
              <script src="plugins/morrisjs/morris.js"></script>

              <!-- ChartJs -->
              <script src="plugins/chartjs/Chart.bundle.js"></script>

              <!-- Flot Charts Plugin Js -->
              <script src="plugins/flot-charts/jquery.flot.js"></script>
              <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
              <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
              <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
              <script src="plugins/flot-charts/jquery.flot.time.js"></script>

              <!-- Sparkline Chart Plugin Js -->
              <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

              <!-- Custom Js -->
              <script src="js/admin.js"></script>
              <script src="js/pages/index.js"></script>

              <!-- Demo Js -->
              <script src="js/demo.js"></script>
          </div>
        </aside>
      </section>
    </div>

</body>

</html>