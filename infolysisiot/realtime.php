<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sensors | Real-time Data</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    <body  class="skin-black fixed">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                INFOLYSIS-IOT
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">


                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>interiot<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar5.png" class="img-circle" alt="User Image" />
                                    <p>
                                        interiot
                                        <small>IOT-SDN Manager</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">

                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="pull-right">
                                        <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div style="text-align: center;">
                        <img src="img/infolysislogo.jpg" class="img-circle" alt="User Image" width="70%" height="70%" />
                    </div>
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar5.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, interiot</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="home.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

            <li>
                            <a href="manage.php">
                                <i class="fa fa-bullseye"></i> <span>Manage</span>
                            </a>
                        </li>
            <li class="active">
                            <a href="realtime.php">
                                <i class="fa fa-area-chart"></i> <span>Real-time Data</span>
                            </a>
                        </li>
    <li>
                            <a href="status.php">
                                <i class="fa fa-heart"></i> <span>Status</span>
                            </a>
                        </li>
                        <li>
                            <a href="alarms.php">
                                <i class="fa fa-bell"></i> <span>Alarms</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Real-time Data
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-area-chart"></i> Home</a></li>
                        <li class="active">Real-time Data</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content" style="font-size:22px;">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-12">
      <a href="realtime.php?proto=HTTP">HTTP</a> - <a href="realtime.php?proto=COAP">COAP</a> - <a href="realtime.php?proto=MQTT">MQTT</a>
       <br><hr>
        <?php
                                      $proto = $_GET['proto'];

          $con = mysqli_connect('127.0.0.1','root','Admin2015','sensors');
          if (!$con) {
              die('Could not connect: ' . mysqli_error($con));
          }

                                    $sql3="SELECT distinct(hostname) from mydata";
                                    $result3 = mysqli_query($con,$sql3);




        $os = array();
            while ($row3 = mysqli_fetch_array($result3)){

        $tempproto = explode("-",$row3["hostname"]);

        if ($tempproto[1]==$proto){
                                     #echo "<a href=\"realtime2.php?hostname=".$row3["hostname"]."\">".$row3["hostname"]."</a><br><br>";
             if (!in_array($tempproto[0], $os)) {
          array_push($os,$tempproto[0]);
              }
        }




        }


        if (!isset($_GET['sid'])){
          foreach ($os as &$value) {
                echo "<a href=\"realtime.php?proto=".$_GET['proto']."&sid=".$value."\">".$value."</a><br>";
          }
        }else{

          $sql3="SELECT distinct(hostname) from mydata";
                                      $result3 = mysqli_query($con,$sql3);
          while ($row3 = mysqli_fetch_array($result3)){



                                if ($_GET['sid']==explode("-",$row3['hostname'])[0]){
                                     echo "<a href=\"realtime2.php?hostname=".$row3["hostname"]."\">".$row3["hostname"]."</a><br><br>";
                                }


          }


        }








                                    ?>



                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">



                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

       <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- FLOT CHARTS -->
        <script src="js/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <script src="js/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
        <script src="js/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
        <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
        <script src="js/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>



</script>



    </body>
</html>
