<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sensors | Settings</title>
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
                Sensors
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
                                <span>Chris Yo<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/myphoto.jpg" class="img-circle" alt="User Image" />
                                    <p>
                                        Chris Yo - Master of Sensors
                                        <small>Member since Nov. 2012</small>
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
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/myphoto.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Chris</p>

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
                            <a href="nodes.php">
                                <i class="fa fa-rss"></i> <span>Nodes</span>
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
                            <a href="historic.php">
                                <i class="fa fa-line-chart"></i> <span>Historic Data</span>
                            </a>
                        </li>
						<li>
                            <a href="alarms.php">
                                <i class="fa fa-warning"></i> <span>Alarms</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="settings.php">
                                <i class="fa fa-cog"></i> <span>Settings</span>
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
                        Settings
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-cog"></i> Home</a></li>
                        <li class="active">Settings</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-12">
                    
					
					
					
									
		<?php

$con = mysqli_connect('127.0.0.1','root','','sensors');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}		
					
					$sql="SELECT id,nodename,alive FROM nodes";
$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)){



$sql3="SELECT id,sensortype,sensorstate,senserate, alarmthreshold FROM sensors where nodeid='".$row['id']."' and sensortype!='led'";
$result3 = mysqli_query($con,$sql3);
while ($row3 = mysqli_fetch_array($result3)){
						
		$senserate = $row3['senserate'];
		$alarmthreshold = $row3['alarmthreshold'];

						
$sql2="SELECT alarmmode FROM settings where nodeid='".$row['id']."'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
	$alarmmode = $row2['alarmmode'];
}

?>

<div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title"><?php echo $row['nodename']; ?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                 
                                      
										
										
										<label>Alarm Mode</label>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label class="">
                                                    <input type="radio" name="optionsRadios<?php echo $row['id']; ?>" id="optionsRadios1<?php echo $row['id']; ?>" value="ON" <?php if ($alarmmode=="1"){echo "checked=\"\"";}?>>
                                                    On
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="">
                                                    <input type="radio" name="optionsRadios<?php echo $row['id']; ?>" id="optionsRadios2<?php echo $row['id']; ?>" value="OFF" <?php if ($alarmmode=="0"){echo "checked=\"\"";}?>>
                                                    Off
                                                </label>
                                            </div>
                                            
                                        </div>
										
										<?php
										if ($row3['sensortype']=="temp"){
										?>
										<div class="form-group">
                                            <label>Alarm Threshold Temperature</label>
                                            <select id="althres<?php echo $row['id']; ?>" class="form-control">
                                                <option value="1" <?php if ($alarmthreshold=="0.1"){echo "selected=\"\"";}?>>0.1</option>
                                                <option value="2" <?php if ($alarmthreshold=="0.5"){echo "selected=\"\"";}?>>0.5</option>
                                                <option value="3" <?php if ($alarmthreshold=="1"){echo "selected=\"\"";}?>>1</option>
                                                <option value="4" <?php if ($alarmthreshold=="2"){echo "selected=\"\"";}?>>2</option>
                                            </select>
                                        </div>
                                        <?php
										}else if ($row3['sensortype']=="light"){
										?>
										<div class="form-group">
                                            <label>Alarm Threshold Light</label>
                                            <select id="althres<?php echo $row['id']; ?>" class="form-control">
                                                <option value="1" <?php if ($alarmthreshold=="30"){echo "selected=\"\"";}?>>30</option>
                                                <option value="2" <?php if ($alarmthreshold=="100"){echo "selected=\"\"";}?>>100</option>
                                                <option value="3" <?php if ($alarmthreshold=="150"){echo "selected=\"\"";}?>>150</option>
                                                <option value="4" <?php if ($alarmthreshold=="300"){echo "selected=\"\"";}?>>300</option>
                                            </select>
                                        </div>

                                        <?php
										}
										?>

                                        <div class="form-group">
                                            <label>Sense Rate</label>
                                            <select id="senserate<?php echo $row['id']; ?>" class="form-control">
                                                <option value="1" <?php if ($senserate=="1000"){echo "selected=\"\"";}?>>mode 1 -> 1 second</option>
                                                <option value="2" <?php if ($senserate=="3000"){echo "selected=\"\"";}?>>mode 2 -> 3 seconds</option>
                                                <option value="3" <?php if ($senserate=="5000"){echo "selected=\"\"";}?>>mode 3 -> 5 seconds</option>
                                                <option value="4" <?php if ($senserate=="30000"){echo "selected=\"\"";}?>>mode 4 -> 30 seconds</option>
                                                <option value="5" <?php if ($senserate=="60000"){echo "selected=\"\"";}?>>mode 5 -> 1 minute</option>
												<option value="6" <?php if ($senserate=="300000"){echo "selected=\"\"";}?>>mode 6 -> 5 minutes</option>
												<option value="7" <?php if ($senserate=="600000"){echo "selected=\"\"";}?>>mode 7 -> 10 minutes</option>
                                            </select>
                                        </div>
                                        
						<button type="submit" class="btn btn-primary" onClick="
						var e = document.getElementById('senserate<?php echo $row['id']; ?>');
						
						<?php 
						
						if ($senserate==1000){
							echo "helper='1';";
						}else if ($senserate==3000){
							echo "helper='2';";
						}else if ($senserate==5000){
							echo "helper='3';";
						}else if ($senserate==30000){
							echo "helper='4';";
						}else if ($senserate==60000){
							echo "helper='5';";
						}else if ($senserate==300000){
							echo "helper='6';";
						}else if ($senserate==600000){
							echo "helper='7';";
						}
						?>
						
						if (helper!=e.options[e.selectedIndex].value){
							var met1 = e.options[e.selectedIndex].value;
						}else{
							var met1='';
						}
						
						var e2 = document.getElementById('althres<?php echo $row['id']; ?>');
						if (e2.options[e2.selectedIndex].text!=<?php echo $alarmthreshold ?>){
							var met2=e2.options[e2.selectedIndex].value;
						}else{
							var met2='';
						}
						if (document.getElementById('optionsRadios1<?php echo $row['id']; ?>').checked) {
							e3 = document.getElementById('optionsRadios1<?php echo $row['id']; ?>').value;
						}
						if (document.getElementById('optionsRadios2<?php echo $row['id']; ?>').checked) {
							e3 = document.getElementById('optionsRadios2<?php echo $row['id']; ?>').value;
						}
						if (e3!='<?php if ($alarmmode==1){echo "ON";}else{echo "OFF";} ?>'){
							var met3=e3;
						}else{
							var met3='';
						}

						if (met1=='' && met2=='' && met3==''){
							alert('No changes to submit.');
							return false;
						}else{
							window.location='settingsrefresher.php?id=<?php echo $row['id']; ?>&st=<?php echo $row3['sensortype']; ?>&sr='+met1+'&at='+met2+'&am='+met3;
							//window.location='settingsrefresher.php';
						}
						
						">Submit</button>

                                    
                                </div><!-- /.box-body -->
                            </div>
									
                                       <?php

										} ?>
										
										
										
										
                           
<?php 
}

mysqli_close($con);
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

     

    </body>
</html>
