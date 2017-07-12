

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
      <!-- PDF -->
      <script src="<?php echo base_url(); ?>assets/js/jspdf.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>assets/js/jspdf.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>assets/js/FileSaver.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>assets/js/jspdf.plugin.table.js" type="text/javascript"></script>
      <!--  Forms Validations Plugin -->
      <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.datatables.js"></script>
      <style>
         .navbar{
         margin-bottom:0px;}
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
         .title_ensyfi{
         color:#fff!important; margin-left: 105px!important; padding-left: 175px !important;
         }
         .abox{border: 1px solid grey;}
         .topbar{background-color:#642160;height:70px;}
         .imgclass{margin:0px;float:left;}
         .imgstyle1{width:40px;height:40px;}
         body{position: absolute;
         height: 100%;
         width: 100%;
         background-color: whitesmoke;}
         .sidemenubcolor{background-color: #1e202c;}
      </style>
   </head>
   <body>
      <div class="wrapper">
      <nav class="navbar navbar-default topbar">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand title_ensyfi" href="#" style="color:white;margin-left:10px;"><?php  echo $this->session->userdata('name'); ?></a>
            </div>
            <div class="collapse navbar-collapse" style="float:right;">
               <ul class="nav navbar-nav navbar-right">
                  <!-- <li>
                     <img src="<?php echo base_url(); ?>assets/wrain.png" style=" width: 45px;margin-right: 20px;margin-top:15px;">
                     </li>
					 <li style="padding:0px 10px; padding-top:15px;">
                     <a href="<?php echo base_url(); ?>student/event" class="abox" style="padding:03px 15px;border-color: white;">
					   <p style="color: white;text-transform: uppercase;font-size: 12px;padding-left:0px;">Events</p>
                     </a>
                  </li>-->
				  
                     <li style="padding:0px 10px; padding-top:11px;">
                     
                     	<a href="<?php echo base_url(); ?>student/view_all_circular" class="abox"style="padding:03px 15px;border-color: white;">
                     		<p style="color: white;text-transform:uppercase;font-size: 12px;padding-left:0px;">Circular</p>
                     	</a>
                     
                     </li>
                  
                  <li class="dropdown" style="padding:11px 10px;">
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
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin:3px;">
                        <div class="photo">
						<?php
					  $user_id=$this->session->userdata('user_id');
					  $user_type=$this->session->userdata('user_type');
					  $query="SELECT user_pic FROM edu_users WHERE user_id='$user_id' AND user_type='$user_type'";
					  $objRs=$this->db->query($query);
					  $row=$objRs->result();
					  foreach ($row as $rows1)
					  {
						  $pic=$rows1->user_pic;
						  if($pic!='')
						  {?>
					  <img src="<?php echo base_url(); ?>assets/students/profile/<?php echo $pic; ?>" class="img-circle img-responsive imgstyle1"/> 
			        <?php }else{
				   ?> <img src="<?php echo base_url(); ?>assets/noimg.png" class="img-circle img-responsive imgstyle1" />
						 <?php }} ?>
                        </div>
                        
                           <b class="caret" style="margin-left:55px;color:white;"></b>
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
      <div class="sidebar sidemenu" data-color="purple" >
         <div class="logo sidemenubcolor"  style="padding:0px 70px;height:115px">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets/ensyfi.png" style="height:130px;"  />
         </div>
         <div class="sidebar-wrapper" style="background-color: #1e202c;">
            <div class="user" style="margin-top:10px;padding-bottom:22px;">
               <div class="imgclass photo" style="margin-left:20px;">
                  <?php
                     $user_id=$this->session->userdata('user_id');
                     $user_type=$this->session->userdata('user_type');
                     $query="SELECT user_pic FROM edu_users WHERE user_id='$user_id' AND user_type='$user_type'";
                     $objRs=$this->db->query($query);
                     $row=$objRs->result();
                     foreach ($row as $rows1)
                     {
                      $pic=$rows1->user_pic;
                      if($pic!='')
                      {?>
                  <img class="img-responsive" style="width:80px;height:80px;" src="<?php echo base_url(); ?>assets/students/profile/<?php echo $pic; ?>" > 
                  <?php }else{
                     ?> <img class="img-responsive" src="<?php echo base_url(); ?>assets/noimg.png"  />
                  <?php }} ?>
               </div>
               <div class="info">
                  <a  href="" style="padding-top:25px;">
                  <?php 
                     $user_id=$this->session->userdata('user_id');
                     $user_type=$this->session->userdata('user_type');
                     $query="SELECT name FROM edu_users WHERE user_id='$user_id' AND user_type='$user_type'";
                     $objRs=$this->db->query($query);
                     $rows=$objRs->result();
                     foreach ($rows as $rows2)
                     { }echo '<p>'; echo"Welcome, "; echo $rows2->name; echo '</p>';?>
                  </a>
               </div>
            </div>
            <ul class="nav">
               <li id="dashboard">
                  <a href="<?php echo base_url(); ?>">
                     <i class="pe-7s-home"></i>
                     <p>Dashboard</p>
                  </a>
               </li>
               <li id="attendence">
                  <a  href="<?php echo base_url(); ?>student/attendance">
                     <i class="pe-7s-safe"></i>
                     <p>Attendence</p>
                  </a>
               </li>
               <li id="homework">
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
               <li id="fees">
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
               <li id="events">
                  <a href="<?php echo base_url(); ?>student/event">
                     <i class="pe-7s-gym"></i>
                     <p>Event</p>
                  </a>
               </li>
               <li id="timetable">
                  <a href="<?php echo base_url(); ?>student/timetable">
                     <i class="pe-7s-diskette"></i>
                     <p>Time Table	</p>
                  </a>
               </li>
            </ul>
         </div>
      </div>

