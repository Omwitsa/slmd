<!DOCTYPE html>
<html lang="en">

<head>
   <title>Service Level Management Data</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
   <link rel="icon" href="../assets/images/logo.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">
   <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">
   <link rel="stylesheet" type="text/css" href="../assets/icon/simple-line-icons/css/simple-line-icons.css">
   <link rel="stylesheet" type="text/css" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">
   <link href="../assets/css/svg-weather.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <?php include('shared/header.php'); ?>
      <?php include('shared/side-menu.php'); ?>
      <!-- Sidebar chat end-->
      <div class="content-wrapper">
         <?php
            include '../services/config.php'; 
            $page = $_GET['page'];
            $id = $_GET['id'];
            if($page == null) {
               $page = 'dashboard';
            }

            include(getUrl($page));
            
         ?>
      </div>
   </div>

    <!-- Required Jqurey -->
    <script src="../assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="../assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="../assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="../assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="../assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="../assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="../assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="../assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="../assets/js/main.min.js"></script>
   <script type="text/javascript" src="../assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="../assets/pages/elements.js"></script>
   <script src="../assets/js/menu.min.js"></script>

   <script>
      var $window = $(window);
      var nav = $('.fixed-button');
      $window.scroll(function(){
         if ($window.scrollTop() >= 200) {
            nav.addClass('active');
         }
         else {
            nav.removeClass('active');
         }
      });
   </script>
</body>

</html>
