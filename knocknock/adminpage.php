<?php 
include "cek_login.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Noknock</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!--Jquery-->
  	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<!-- Toggle Button -->
  	<link href="css/bootstrap-toggle.min.css" rel="stylesheet">
  	<link href="css/toggle.min.css" rel="stylesheet">
  	<script src="js/bootstrap-toggle.min.js"></script>
  	<!--Firebase -->
  	<script src="https://cdn.firebase.com/js/client/2.4.1/firebase.js"></script>
  	<script src="firebaseDataHelper.js"></script>
  	<script src="js/script.js"></script>

  	
  	<!-- Latest compiled and minified CSS -->
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<!-- Latest compiled and minified JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  	<!-- Chart JS-->
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.js"></script>
 
  
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  	<!-- <link rel="stylesheet" href="dist/css/AdminLTE.min.css">-->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<!-- <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">-->

  	
  	
  	
  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>

  #loading{
    vertical-align: middle;
    visibility: hidden;
  }
  #dashboard_title{
    color: white;
  }

  .active{
    visibility: visible !important;
  }
  
</style>




</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>K</b>NK</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Knock</b>NOCK</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">


            <li class="dropdown messages-menu">
            <a href="adminpage.php">
              <i class="fa fa-refresh"></i>
              <span class="label label-success"></span>
            </a>
          </li>





						<li>
              <h4><table><tbody id="dashboard_title"></tbody></table></div></h4>
              <!-- <iframe src="http://free.timeanddate.com/clock/i61nkj91/n631/tlid/fn6/fs20/pl0/pr2/pb0/th2/ts1/ta1" frameborder="0" width="131" height="25"></iframe> -->
            </li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="dist/img/hehe1.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Admin</p>
					</div>
				</div>
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MENU</li>
					<li class="treeview active">
						<a href="adminpage.php">
							<i class="fa fa-tachometer"></i> <span>Home</span>
						</a>
					</li>
					<li>
						<a href="setting.php">
							<i class="fa fa-cog"></i> <span>Setting</span>
						</a>
					</li>
					<li>
						<a href="logout.php">
							<i class="fa fa-sign-out"></i>
							<span>Logout</span>
						</a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
      <h1>
        Fixed Layout
        <small>Blank example to the fixed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">

        <div class="row">
          <div class="col-md-4">

            <div class="box box-primary box-solid">
              <div class="box-header">
                <h3 class="box-title">Lights</h3>
              </div>
              <div class="box-body no-padding">                  
                <table class="table table-striped"><tr>
                  <tr><th><h5>Garage and terrace</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="garage">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th>

                  <th><h5>Livingroom</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="livingroom">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th></tr>

                  <tr><th><h5>Familyroom</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="familyroom">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th>

                  <th><h5>Bedroom 1</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="bedroom1">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th></tr>

                  <tr><th><h5>Bedroom 2</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="bedroom2">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th>

                  <th><h5>Kitchen</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="kitchen">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th></tr>

                  <tr><th><h5>Bathroom</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="bathroom">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th>

                  <th><h5>Backyard</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="backyard">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th></tr>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col (left) -->
          <div class="col-md-4">
            <div class="box box-primary box-solid">
              <div class="box-header">
                <h3 class="box-title">Other Devices</h3>
              </div>
              <div class="box-body no-padding">
                <table class="table table-striped"><tr>
                  <tr><th><h5>Waterpump</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="waterpump">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th></tr>

                  <tr><th><h5>Fan</h5></th>
                  <th><label class="switch">
                    <input type="checkbox" id="fan">
                    <span class="slider round"></span>
                    <span class="switch-label" data-on="On" data-off="Off"></span>
                  </label></th></tr>
                </table>
              </div>

              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.col (Middle) -->
          <div class="col-md-4">
            <div class="box box-warning box-solid">
              <div class="box-header">
                <div class="overlay">
            </div>
            <!-- <i class="fa fa-refresh fa-spin" id="loading"></i> -->
                 <!-- <i id="loading" class="fa fa-spinner fa-pulse fa-2x fa-fw margin-bottom"></i> -->
                <h3 class="box-title">Sensors</h3>
              </div>
              <div class="box-body">

              <div class="overlay"><i class="fa fa-refresh fa-spin" id="loading"></i></div>
            
                <div id="sensor_body" class="panel-body"></div>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Current</th>
                        <th>Max</th>
                        <th>Min</th>
                      </tr>
                    </thead>
                    <tbody id="tbody-sensors">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="row">
          <!-- /.box -->
          <div class="col-md-3">

            <div class="box box-primary box-solid">
              <div class="box-header">
                <h3 class="box-title">Weather</h3>
              </div>
              <div class="box-body">
                <div id="environment_container">
                  <!-- weather widget start --><a class="weatherwidget-io" href="https://forecast7.com/en/n7d97112d63/malang/" data-label_1="MALANG" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Current" data-days="3" data-theme="original" data-baseColor="#337ab7" data-cloudFill="#337ab7" >MALANG WEATHER</a>
                  <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://weatherwidget.io/js/widget.min.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","weatherwidget-io-js");
                  </script><!-- weather widget end -->
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

          
<!-- /.col (left) -->
  <div class="col-lg-9 col-md-9 col-sm-9">
    <div class="box box-success box-solid">
      <div class="box-header">
      	<h3 class="box-title">Raspberry Pi Status</h3></div>
       <div class="box-body">
        
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="third widget pie">
                <div id="canvas_container_ram" class="canvas-container text-center"></div>
                <!--<canvas id="canvas_container_ram" class="canvas-container text-center" style="height:50px"></canvas>-->
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="text-center" id="cpu_container"></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="third widget pie">
                <div id="canvas_container_disk" class="canvas-container text-center"></div>
            </div>
        </div>
      </div>
    </div>
  </div>
        <!-- /.col (right) -->


      </section>








    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


		<footer class="main-footer">
			<div class="pull-right hidden-xs">

			</div>

		</footer>

		<!-- Control Sidebar -->

		<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  	immediately after the control sidebar -->
  	<div class="control-sidebar-bg"></div>

  	<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
  	<!-- page script -->



  	

  </body>
  </html>
