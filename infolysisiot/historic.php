<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sensors | Historic Data</title>
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
						<li class="active">
                            <a href="historic.php">
                                <i class="fa fa-line-chart"></i> <span>Historic Data</span>
                            </a>
                        </li>
						<li>
                            <a href="alarms.php">
                                <i class="fa fa-warning"></i> <span>Alarms</span>
                            </a>
                        </li>
                        <li>
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
                        Historic Data
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-line-chart"></i> Home</a></li>
                        <li class="active">Historic Data</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-12">
                        <label>Start id</label>
						<input type="text" id="startid" class="form-control" placeholder="Enter start id">
						<label>End id</label>
						<input type="text" id="endid" class="form-control" placeholder="Enter end id">
						<br>
						<button type="submit" class="btn btn-primary" onClick="window.location='historic.php?start='+document.getElementById('startid').value+'&end='+document.getElementById('endid').value;">Submit</button>
						<br>
						<br>
						<!-- Line chart -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="fa fa-line-chart-o"></i>
                                    <h3 class="box-title">Node 1 Light</h3>
                                </div>
                                <div class="box-body">
                                    <div id="line-chart" style="height: 300px;"></div>
                                </div><!-- /.box-body-->
                            </div><!-- /.box -->
							
							
							<!-- Line chart -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="fa fa-line-chart-o"></i>
                                    <h3 class="box-title">Node 2 Temp</h3>
                                </div>
                                <div class="box-body">
                                    <div id="line-chart2" style="height: 300px;"></div>
                                </div><!-- /.box-body-->
                            </div><!-- /.box -->
							
						
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

        <!-- Page script -->
        <script type="text/javascript">
$(function() {

/*
                 * LINE CHART
                 * ----------
                 */
               

					


                        if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp2 = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp2.onreadystatechange = function() {
						if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
							
							obj = JSON.parse(xmlhttp2.responseText);

						}
					}
					xmlhttp2.open("GET", "rtdata.php?req=3&start=<?php if (isset($_GET['start'])){echo $_GET['start'];}else{echo "0";} ?>&end=<?php if (isset($_GET['end'])){echo $_GET['end'];}else{echo "200";} ?>",false);
					xmlhttp2.send();
					var i = 0;
					var res2 = [];
					plirofories = [];
					for (var key in obj) {
						if (obj.hasOwnProperty(key)) {
							//console.log(key+" - "+obj[key]);
							res2.push([i, obj[key]]);
							plirofories.push(key);
							i=i+1;
						}
					}
                     	
                   
                
				
                var line_data1 = {
                    data: res2,
                    color: "#3c8dbc"
                };
                
                $.plot("#line-chart", [line_data1], {
                    grid: {
                        hoverable: true,
                        borderColor: "#f3f3f3",
                        borderWidth: 1,
                        tickColor: "#f3f3f3"
                    },
                    series: {
                        shadowSize: 0,
                        lines: {
                            show: true
                        },
                        points: {
                            show: true
                        }
                    },
                    lines: {
                        fill: false,
                        color: ["#3c8dbc", "#f56954"]
                    },
                    yaxis: {
                        show: true,
                    },
                    xaxis: {
                        show: true
                    }
                });
                //Initialize tooltip on hover
                $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
                    position: "absolute",
                    display: "none",
                    opacity: 0.8
                }).appendTo("body");
                $("#line-chart").bind("plothover", function(event, pos, item) {

                    if (item) {
                        var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);

                        $("#line-chart-tooltip").html(plirofories[Math.round(x)]+" -> "+ y)
                                .css({top: item.pageY + 5, left: item.pageX + 5})
                                .fadeIn(200);
                    } else {
                        $("#line-chart-tooltip").hide();
                    }

                });
                /* END LINE CHART */

            });
			
			
			
			$(function() {

/*
                 * LINE CHART
                 * ----------
                 */
               

					


                        if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp2 = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp2.onreadystatechange = function() {
						if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
							
							obj = JSON.parse(xmlhttp2.responseText);

						}
					}
					xmlhttp2.open("GET", "rtdata.php?req=4&start=<?php if (isset($_GET['start'])){echo $_GET['start'];}else{echo "0";} ?>&end=<?php if (isset($_GET['end'])){echo $_GET['end'];}else{echo "200";} ?>",false);
					xmlhttp2.send();
					var i = 0;
					var res2 = [];
					plirofories2 = [];
					for (var key in obj) {
						if (obj.hasOwnProperty(key)) {
							//console.log(key+" - "+obj[key]);
							res2.push([i, obj[key]]);
							plirofories2.push(key);
							i=i+1;
						}
					}
                     	
                   
                
				
                var line_data1 = {
                    data: res2,
                    color: "#3c8dbc"
                };
                
                $.plot("#line-chart2", [line_data1], {
                    grid: {
                        hoverable: true,
                        borderColor: "#f3f3f3",
                        borderWidth: 1,
                        tickColor: "#f3f3f3"
                    },
                    series: {
                        shadowSize: 0,
                        lines: {
                            show: true
                        },
                        points: {
                            show: true
                        }
                    },
                    lines: {
                        fill: false,
                        color: ["#3c8dbc", "#f56954"]
                    },
                    yaxis: {
                        show: true,
                    },
                    xaxis: {
                        show: true
                    }
                });
                //Initialize tooltip on hover
                $("<div class='tooltip-inner' id='line-chart2-tooltip'></div>").css({
                    position: "absolute",
                    display: "none",
                    opacity: 0.8
                }).appendTo("body");
                $("#line-chart2").bind("plothover", function(event, pos, item) {

                    if (item) {
                        var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);

                        $("#line-chart2-tooltip").html(plirofories2[Math.round(x)]+" -> "+ y)
                                .css({top: item.pageY + 5, left: item.pageX + 5})
                                .fadeIn(200);
                    } else {
                        $("#line-chart2-tooltip").hide();
                    }

                });
                /* END LINE CHART */

            });
		 </script>

    </body>
</html>
