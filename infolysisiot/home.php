<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>INFOLYSIS-IOT | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<script>

		
		function showAjax(req, pioid) {
		
    if (req == "") {
        document.getElementById(pioid).innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById(pioid).innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajax.php?req=1",true);
        xmlhttp.send();
    }
}

		function showAjax2(req, pioid) {
		
    if (req == "") {
        document.getElementById(pioid).innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp2 = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp2.onreadystatechange = function() {
            if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
                document.getElementById(pioid).innerHTML = xmlhttp2.responseText;
            }
        }
        xmlhttp2.open("GET", "ajax.php?req=2",true);
        xmlhttp2.send();
    }
}
function showAjax3(req, pioid) {
		
    if (req == "") {
        document.getElementById(pioid).innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp3 = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp3.onreadystatechange = function() {
            if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
                document.getElementById(pioid).innerHTML = xmlhttp3.responseText;
            }
        }
        xmlhttp3.open("GET", "ajax.php?req=3",true);
        xmlhttp3.send();
    }
}
function showAjax4(req, pioid) {
		
    if (req == "") {
        document.getElementById(pioid).innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp4 = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp4 = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp4.onreadystatechange = function() {
            if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200) {
                document.getElementById(pioid).innerHTML = xmlhttp4.responseText;
            }
        }
        xmlhttp4.open("GET", "ajax.php?req=4",true);
        xmlhttp4.send();
    }
}



showAjax("asd","nodenumber");
showAjax2("asd","temperaturesensors");
showAjax3("asd", "lightsensors");
showAjax4("asd", "leds");

setInterval(function (){showAjax("asd","nodenumber")}, 5000);
setInterval(function (){showAjax2("asd","temperaturesensors")}, 5000);
setInterval(function (){showAjax3("asd", "lightsensors")}, 5000);
setInterval(function (){showAjax4("asd", "leds")}, 5000);
		</script>
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
                        <li class="active">
                            <a href="home.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						
						<li>
                            <a href="manage.php">
                                <i class="fa fa-bullseye"></i> <span>Manage</span>
                            </a>
                        </li>
						<li>
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
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3 id="nodenumber">
                                        3
                                    </h3>
                                    <p>
                                        Mappers
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-rss"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                   &nbsp;
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <!--
                        <div class="col-lg-3 col-xs-6"> 
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 id="temperaturesensors">
                                        0
                                    </h3>
                                    <p>
                                        Temperature Sensors
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-thermometer"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    On <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3 id="lightsensors">
                                        6
                                    </h3>
                                    <p>
                                        Generators
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-sun-o"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    &nbsp;
                                </a>
                            </div>
                        </div><!-- ./col -->
                        
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3 id="leds">
                                        6
                                    </h3>
                                    <p>
                                        OpenFlow Rules
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    &nbsp;
                                </a>
                            </div>
                        </div>
                        
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        
                        <section class="col-lg-12 connectedSortable">
						
						
                            <h2>Testbed Topology</h2>
                        <iframe width="640" height="400" src="graphtest.php"></iframe>

							<?php
/*
    $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

    $msg = "D";
    $len = strlen($msg);

    #socket_sendto($sock, $msg, $len, 0, '127.0.0.1', 6666);
    socket_close($sock);
*/
?>
				


							
							
                        </section>
                        
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>
