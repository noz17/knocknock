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
	 <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- TIMEPICKER 2 COBA COBA-->
	<link rel="stylesheet" href="plugins/timepicker2/clockpicker/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/timepicker2/clockpicker/dist/bootstrap-clockpicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

	<!-- Toggle Button -->
  	<link href="css/bootstrap-toggle.min.css" rel="stylesheet">
  	<link href="css/toggle.min.css" rel="stylesheet">
  	

  	<!--Jquery-->
  	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
 	 <!-- Firebase -->
  	<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  	<script src="https://cdn.firebase.com/js/client/2.4.1/firebase.js"></script>
  	<script src="settingPageHelper.js"></script>
  	<script src="js/script.js"></script>


  	<!-- <script src="js/bootstrap-toggle.min.js"></script> -->
  	<!--Firebase -->

  	<!-- <script src="https://cdn.firebase.com/js/client/2.4.1/firebase.js"></script>

  	<script src="https://www.gstatic.com/firebasejs/3.1.0/firebase.js"></script>
  	<script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-app.js"></script>
  	<script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-auth.js"></script>
  	<script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script> -->

  	<!-- <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-database.js"></script>
  	 -->
  	
  	<!-- <script src="js/script.js"></script> -->
  	
  	

  	
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
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">


<?php
$form_device = $_POST[form_device];
$form_action = $_POST[form_action];
$timepicker = $_POST[timepicker];



if ($form_device == 1){
	$form_device = 'garage and terrace';
}
elseif ($form_device == 2) {
	$form_device = 'Livingroom';
}
elseif ($form_device == 3) {
	$form_device = 'Familyroom';
}
elseif ($form_device == 4) {
	$form_device = 'Bedroom 1';
}
elseif ($form_device == 5) {
	$form_device = 'Bedroom 2';
}
elseif ($form_device == 6) {
	$form_device = 'Kitchen';
}
elseif ($form_device == 7) {
	$form_device = 'Bathroom';
}
elseif ($form_device == 8) {
	$form_device = 'Backyard';
}
elseif ($form_device == 0) {
	$form_device = 'undefined';
};
?>
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
						<li>
							<h4><div id="dashboard_title"></div></h4>
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
					<li>
						<a href="adminpage.php">
							<i class="fa fa-tachometer"></i> <span>Home</span>
						</a>
					</li>
					<li class="treeview active">
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

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->

			<!-- Main content -->
			<section class="content">

				<div class="row">
					<div class="col-md-4">
						<form action="" method="POST" name="timer"></form>

						<div class="box box-primary box-solid">
              				<div class="box-header">
								<h3 class="box-title">Set Timer</h3>
							</div>
							<div class="box-body">                  
								<table class="table table-condensed">
								<tr>
									<th><h5>Select Device</h5></th>
										 <th> <select class="form-control" id="form_device" name="form_device">
										  <!-- 	<option value="0">Choose Device</option>
										    <option value="1">Garage and Terrace</option>
										    <option value="2">Livingroom</option>
										    <option value="3">Familyroom</option>
										    <option value="4">Bedroom 1</option>
										    <option value="5">Bedroom 2</option>
										    <option value="6">Kitchen</option>
										    <option value="7">Bathroom</option>
										    <option value="8">Backyard</option> -->
										  </select></th>
								</tr>
								<tr>
									<th><h5>Action</h5></th>
									<th><select class="form-control" id="form_action" name="form_action">
										<option selected="true" disabled="true" >Select Action</option>
										<option value="ON">ON</option>
										<option value="OFF">OFF</option>
										</select>
									</th>
								</tr>
								<tr>
									<th><h5>Select Time</h5></th>
									<th>
							    		<div class="input-group clockpicker">
								    		<input type="text" class="form-control" id="form_clock" name="form_clock" value="">
								    		<span class="input-group-addon">
								    		<span class="glyphicon glyphicon-time"></span>
								    		</span>
							    		</div>
								    </th>
								</tr>
									<tr><th colspan="2"><button type="submit" id="submit" name="submit" class="btn btn-block btn-primary" value="send">Set Timer</button></th></tr>
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</form>
					</div>

					<style type="text/css">

						.popover{
							font-size:12px;

						}
						#dashboard_title{
							color: white;
							}
						.popover.top{
							margin-top: 8rem;
						}
					</style>
				
					<!-- /.col (Middle) -->
					<div class="col-md-4">

			            <div class="box box-primary box-solid">
			              <div class="box-header">
			                <h3 class="box-title">Light Sensor</h3>
			              </div>
			              <div class="box-body">
			                <div class="box-body no-padding">
				                <table class="table table-striped"><tr>
				                  <tr><th><h5>Garage & Terrace</h5></th>
				                  <th><label class="switch">
				                    <input type="checkbox" id="ldr">
				                    <span class="slider round"></span>
				                    <span class="switch-label" data-on="On" data-off="Off"></span>
				                  </label></th></tr>
				                </table>
				              </div>
			              </div>
			              <!-- /.box-body -->
			            </div>
			            <!-- /.box -->
			          </div>





			          <div class="col-md-4">

			          	
			            <div class="box box-primary box-solid">
			              <div class="box-header">
			                <h3 class="box-title">Temperature Control</h3>
			              </div>
			              <div class="box-body">
			                <div class="box-body no-padding">
				                <table class="table">
				                  <tr><th><h5>Set Temperature</h5></th>
					                  <th><label class="switch">
					                      <input type="checkbox" id="set_temperature">
					                      <span class="slider round"></span>
					                      <span class="switch-label" data-on="On" data-off="Off"></span>
				                  			</label>
				                  		</th>
				                  </tr>
				                  <tr>
				                  	<th><h5>Set Value</h5></th>
				                  	<th>
				                  		<div class="input-group">
							                <input type="text" class="form-control" placeholder="ex: 25 (Celcius format)">
							                <span class="input-group-addon"><i class="fa fa-sort"></i></span>
							            </div>
				                  	</th>
				                  </tr>
				                  <tr>
				                  	
				                  	<th colspan="2"><button type="submit" id="value_temp" name="submit" class="btn btn-block btn-primary" value="send">Set Temp</button></th>
				                  
				                  </tr>
				                </table>
				              </div>
			              </div>
			              <!-- /.box-body -->
			            </div>
			            <!-- /.box -->
			          </div>











				</div>
				<div class="row">
					<!-- /.box -->


					<div class="col-md-12">
						<div class="box box-primary box-solid">
              				<div class="box-header">
								<h3 class="box-title">Timer Status</h3>
							</div>
							<div class="box-body">
								<div class="table-responsive">
									<table class="table table-striped table-hover table-condensed" id="tabletimer">
										<thead>
											<tr>
												<th>Device Name</th>
												<th>Action</th>
												<th>Time</th>
												<th>Edit</th>
											</tr>
											
										</thead>
										<tbody id="tbody-timer">
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
					</div>





			          



			          
					<!-- /.col (left) -->
					<!-- <div class="col-lg-9 col-md-9 col-sm-9">
					    <div class="box box-success box-solid">
					      <div class="box-header">
					      	<h3 class="box-title">Raspberry Pi Status</h3></div>
					       <div class="box-body">

					        
					        <div class="col-lg-4 col-md-4 col-sm-4">
					          <div class="third widget pie">
					                <div id="canvas_container_ram" class="canvas-container text-center"></div>
					                <canvas id="canvas_container_ram" class="canvas-container text-center" style="height:50px"></canvas>
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
					  </div> -->
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

<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!--TIME PICKER coba coba -->
<script type="text/javascript" src="plugins/timepicker2/clockpicker/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="plugins/timepicker2/clockpicker/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="plugins/timepicker2/clockpicker/dist/bootstrap-clockpicker.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!--MARIKIWESS ===========================================================================================-->


  	<!-- page script -->

<script>
  $(function () {
  	
  });
</script>

<script type="text/javascript">
$('.clockpicker').clockpicker({
    placement: 'top',
    align: 'left',
    donetext: 'Done'
});
</script>

  </body>
  </html>
