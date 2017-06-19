<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ENSYFI</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stroke/css/pe-icon-7-stroke.css">
		<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Forms Validations Plugin -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/js/jquery.datatables.js"></script>

<style>
.navbar{
margin-bottom:0px;}
.sidemenu{margin-top:78px;}

.caret{
		position: relative;
		top: -20px;
		float: right;
}

.alert button.close {
	position: relative;top:10px;
}
.error{
	color: red;
font-weight: 500;
}
.abox{border: 1px solid grey;}
</style>
</head>
<body>

<div class="wrapper">
	<nav class="navbar navbar-default" style="background-color: #9266d9;">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#" style="color: white;margin-left:10px;margin-top: 13px;">ENSYFI Dashboard </a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
					
					 <!-- <li>
						<img src="<?php echo base_url(); ?>assets/wrain.png" style=" width: 45px;margin-right: 20px;margin-top:15px;">
						</li>-->
						<li style="padding:0px 10px; padding-top:15px;">
						
							<a href="<?php echo base_url(); ?>student/view_all_circular" class="abox"style="padding:03px 15px;border-color: white;">
								<p style="color: white;text-transform:uppercase;font-size: 12px;padding-left:0px;">Circular</p>
							</a>
						
						</li>
                   <li style="padding:0px 10px; padding-top:15px;">
							<a href="<?php echo base_url(); ?>student/event" class="abox"style="padding:03px 15px;border-color: white;">
							
								<p style="color: white;text-transform: uppercase;font-size: 12px;padding-left:0px;">Events</p>
							</a>
						</li>
						<li class="dropdown" style="padding:15px 10px;">
					<a href="#" class="dropdown-toggle abox" data-toggle="dropdown" style="padding:03px 15px;font-size: 12px; color: white;border-color: white;text-transform: uppercase;">
						  Quick Links</a>
								<ul class="dropdown-menu">
								 <li><a href="<?php echo base_url(); ?>student/onduty">On Duty Form</a></li>
								 <li><a href="<?php echo base_url(); ?>student/special_class_details">Special Class </a></li> 
								<!-- <li><a href="<?php echo base_url(); ?>groups/home">Groups </a></li>
								 <li><a href="<?php echo base_url(); ?>extracurricular/home">Extra curricular  </a></li> 
								 <li><a href="<?php echo base_url(); ?>specialclass/home">Special Class</a></li> --> 
							</ul>
						</li>

						<li class="dropdown dropdown-with-icons">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<div class="photo">
										<i class="pe-7s-user pe-7x"style="font-size:35px;color: white;"></i>
											</div>
								<p class="hidden-md hidden-lg">
									More
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu dropdown-with-icons">
								<li>
									<a href="<?php echo base_url(); ?>studentprofile/profile_update">
										<i class="pe-7s-tools"></i> Profile
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>studentprofile/pwd_reset">
										<i class="pe-7s-tools"></i> Setting
									</a>
								</li>
								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url(); ?>adminlogin/logout" class="text-danger">
										<i class="pe-7s-close-circle"></i>
										Log out
									</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>


    <div class="sidebar sidemenu" data-color="purple"  style="">

    	<div class="sidebar-wrapper">


            <ul class="nav">
                <li class="">
                    <a href="<?php echo base_url(); ?>">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

								<li>
										<a  href="<?php echo base_url(); ?>student/attendance">
												<i class="pe-7s-safe"></i>
												<p>Attendence	</p>

										</a>

								</li>

								<li>
										<a href="<?php echo base_url(); ?>student/homework_view">
												<i class="pe-7s-flag"></i>
												<p>Home Work</p>

										</a>
										<!-- <div class="collapse" id="sectionmenu">
											<ul class="nav">
													<li><a href="<?php echo base_url(); ?>student/homework_view">Home Work</a></li>

											</ul>
									</div>-->
								</li>
								
								<li>
										<a href="<?php echo base_url(); ?>student/fees_status">
												<i class="pe-7s-flag"></i>
												<p>Fees Status</p>

										</a>
										
								</li>
								
								<li id="exam">
										<a data-toggle="collapse"  href="#examinationmenu">
												<i class="pe-7s-note2"></i>
												<p>Examination </p>
												<b class="caret"></b>
										</a>
										<div class="collapse" id="examinationmenu">
											<ul class="nav">
								<li id="exam1">
								  <a href="<?php echo base_url(); ?>student/exam_name_calender">Examination Calender</a>
								</li>
								<li id="exam2">
									<a href="<?php echo base_url(); ?>student/exam_views">Examination Result</a>
								</li>


											</ul>
									</div>

									</li>

								<li>
										<a href="<?php echo base_url(); ?>student/event">
												<i class="pe-7s-gym"></i>
												<p>Event</p>
										</a>
								</li>

								<li>
										<a href="<?php echo base_url(); ?>student/timetable">
												<i class="pe-7s-diskette"></i>
												<p>Time Table	</p>
										</a>
								</li>

            </ul>
    	</div>

    </div>
