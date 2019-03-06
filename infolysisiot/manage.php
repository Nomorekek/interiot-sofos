<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>INFOLYSIS-IOT | Manage</title>
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
    <script>

    function sendCommand(command) {

    if (command == "") {

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

            }
        }
        console.log("ESTEILE");
        xmlhttp2.open("GET", "command.php?command="+command,true);
        xmlhttp2.send();
    }
}

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
                        <li>
                            <a href="home.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
            <li class="active">
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
                        Manage
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-bullseye"></i> Home</a></li>
                        <li class="active">Manage</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-12">





    <?php

$con = mysqli_connect('127.0.0.1','root','Admin2015','sensors');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
          ?>







                      <div class="callout callout-info">
                                        <h4>TESTBED</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('DESTROY:TESTBED');">

                                        <i class="fa fa-stop"></i> DESTROY
                                    </a></p>
                                    </div>


                                 </div><!-- ./col -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="col-lg-12">

                                    <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='opendaylight'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>OPENDAYLIGHT - SDN CONTROLLER</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('DEPLOY:opendaylight');window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Deploy
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>OPENDAYLIGHT - SDN CONTROLLER</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('DESTROY:opendaylight');window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Destroy
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>


                                 </div><!-- ./col -->
                            </div><!-- /.row -->

                            <div class="row">
                                 <div class="col-lg-6">

                                    <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='httpgen'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>HTTP GENERATORS</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('START:httpgen');window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Start
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>HTTP GENERATORS</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('STOP:httpgen');window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Stop
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>

                                    <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='coapgen'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>COAP GENERATORS</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('START:coapgen');window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Start
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>COAP GENERATORS</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('STOP:coapgen');window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Stop
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>

                                    <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='mqttgen'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>MQTT GENERATORS</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('START:mqttgen');window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Start
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>MQTT GENERATORS</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('STOP:mqttgen');window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Stop
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>

                            </div>
                            <div class="col-lg-6">

                                    <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='httpmap'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>HTTP MAP</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('DEPLOY:httpmap');window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Deploy
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>HTTP MAP</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('DESTROY:httpmap');window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Destroy
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>

                                    <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='coapmap'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>COAP MAP</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('DEPLOY:coapmap');window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Deploy
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>COAP MAP</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('DESTROY:coapmap');window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Destroy
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>

                                   <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='mqttmap'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>MQTT MAP</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('DEPLOY:mqttmap');window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Deploy
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>MQTT MAP</h4>
                                        <p><a class="btn btn-app" onClick="sendCommand('DESTROY:mqttmap');window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Destroy
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>

                        </div><!-- ./col -->
                    </div><!-- /.row -->


      <div class="row">
                                <div class="col-lg-12">

                                    <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='alarmfire'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>ALARM - FIRE</h4>
                                        <p><a class="btn btn-app" onClick="window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Enable
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>ALARM - FIRE</h4>
                                        <p><a class="btn btn-app" onClick="window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Disable
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>


                                 </div><!-- ./col -->
                            </div><!-- /.row -->


        <div class="row">
                                <div class="col-lg-12">

                                    <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='alarmstorm'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>ALARM - EXTREME WEATHER CONDITIONS</h4>
                                        <p><a class="btn btn-app" onClick="window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Enable
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>ALARM - EXTREME WEATHER CONDITIONS</h4>
                                        <p><a class="btn btn-app" onClick="window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Disable
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>


                                 </div><!-- ./col -->
                            </div><!-- /.row -->



        <div class="row">
                                <div class="col-lg-12">

                                    <?php

                                    $sql3="SELECT id,instancestate FROM instances where instancename='alarmexplosion'";
                                    $result3 = mysqli_query($con,$sql3);
                                    while ($row3 = mysqli_fetch_array($result3)){

                                    ?>


                                        <?php if ($row3['instancestate']=="off"){
                                        ?>
                                        <div class="callout callout-danger">
                                        <h4>ALARM - EXPLOSION</h4>
                                        <p><a class="btn btn-app" onClick="window.location='managerefresher.php?ti=on&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-play"></i> Enable
                                    </a></p>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="callout callout-info">
                                        <h4>ALARM - EXPLOSION</h4>
                                        <p><a class="btn btn-app" onClick="window.location='managerefresher.php?ti=off&id=<?php echo $row3['id']; ?>'">

                                        <i class="fa fa-stop"></i> Disable
                                    </a></p>
                                    </div>


                                        <?php }

                                        } ?>


                                 </div><!-- ./col -->
                            </div><!-- /.row -->


<div class="row">
                                <div class="col-lg-12">

                                        <div class="callout callout-danger">
                                        <h4>ALARM - ENABLE SENSOR</h4>
                                      <form action="managerefresher.php" method="get">
                                        <p>
          <input type="hidden" name="ti" value="on" />
                                        <input type="text" name="id" value="" required="required" />
                                        <button class="btn btn-app"><i class="fa fa-play"></i>Enable</button></p>
                                        </form>


          </div>


                                 </div><!-- ./col -->
                            </div><!-- /.row -->




      <div class="row">
                                <div class="col-lg-12">

                                    <div class="callout callout-info">
                                        <h4>ALARM - DISABLE SENSOR</h4>
          <form action="managerefresher.php" method="get">
          <p>
          <input type="hidden" name="ti" value="off" />
          <input type="text" name="id" value="" required="required" />
          <button class="btn btn-app"><i class="fa fa-stop"></i>Disable</button></p>
                                      </form>
          </div>



                                 </div><!-- ./col -->
                            </div><!-- /.row -->



<div class="row">
                                <div class="col-lg-12">

                                        <h4><span style="text-decoration:underline;">Disabled Sensors</span></h4>
          <p>

<?php
                                $sql3="SELECT id,instancename FROM instances where instancestate='off' and id>15";
                                $result3 = mysqli_query($con,$sql3);
                                while ($row3 = mysqli_fetch_array($result3)){
                                     echo $row3['instancename']."<br>";
                                }
?>

          </p>


                                 </div><!-- ./col -->
                            </div><!-- /.row -->



<?php
mysqli_close($con);
?>

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



    </body>
</html>
