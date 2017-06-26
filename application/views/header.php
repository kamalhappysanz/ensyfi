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
         .sidebar .sidebar-wrapper > .nav {
         margin-top: 0px;
         }
         .abox{border: 1px solid grey;}
         .title_ensyfi{
           color:#fff!important; margin-left: 10px!important; padding-left: 175px !important;
         }
		 .stu{background: url(<?php echo base_url(); ?>assets/img/icons/Stu.png) 0 0;}
      </style>
   </head>
   <body>
      <div class="wrapper">
      <nav class="navbar navbar-default" style="background-color: #9266d9;height: 70px;">
         <div class="container">

            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand title_ensyfi" href="#" ><?php  echo $this->session->userdata('name'); ?> </a>
            </div>
            <div class="collapse navbar-collapse" style="float:right;">
               <ul class="nav navbar-nav navbar-right">

						<li class="dropdown" style="padding:08px 10px;">
					<a href="#" class="dropdown-toggle abox" data-toggle="dropdown" style="padding:03px 15px;font-size: 12px; color: white;border-color: white;text-transform: uppercase;">
						  Quick Links</a>
								<ul class="dropdown-menu">

 <li><a href="<?php echo base_url(); ?>specialclass/home">Special Class</a></li>
  <li><a href="<?php echo base_url(); ?>event/home">Add Reminder</a></li> 

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
			<img src="<?php echo base_url(); ?>assets/admin/profile/<?php echo $pic; ?>" class="img-circle" style="width:40px;height:40px;" > 
			        <?php }else{
				   ?> <img src="<?php echo base_url(); ?>assets/noimg.png" />
						 <?php }} ?>
                        </div>
                        
                           <b class="caret" style="margin-left:55px;color:white;"></b>
                     </a>
                     <ul class="dropdown-menu dropdown-with-icons">
                        <li>
                           <a href="<?php echo base_url(); ?>adminlogin/profilepic">
                           <i class="pe-7s-tools"></i> Profile
                           </a>
                        </li>

                        <li>
                           <a href="<?php echo base_url(); ?>adminlogin/profile">
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
      <div class="sidebar sidemenu" data-color="purple">
	   <div class="logo">
            <a href="" class="logo-text">
              Logo Here
            </a>
        </div>
		
         <div class="sidebar-wrapper">
		 
		 <div class="user">
                <div class="photo" style="margin:0px;float:left;margin-left:20px;width:70px;height:70px;">
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
					<img src="<?php echo base_url(); ?>assets/admin/profile/<?php echo $pic; ?>" > 
			        <?php }else{
				   ?> <img src="<?php echo base_url(); ?>assets/noimg.png" />
						 <?php }} ?>
                </div>
                <div class="info" class="logo-text">
                    <a  href="" style="padding-top: 25px;">
					<?php  $user_type=$this->session->userdata('user_type');
					       if($user_type==1)
						   {echo "<p> Welcome Admin </p>";}else { echo "Welcome";}?>
                     
                    </a>
                </div>
            </div>
			
            <ul class="nav" style="background-color: #6f3fbc;">
               <li id="dash">
                  <a href="<?php echo base_url(); ?>adminlogin/dashboard">
                     <i class="pe-7s-home"></i>
                     <p>Dashboard</p>
                  </a>
               </li>
               <li id="master">
                  <a data-toggle="collapse" href="#mastersmenu" id="masters">
                     <i class="pe-7s-date"></i>
                     <p>Masters</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="mastersmenu">
                     <ul class="nav">
                        <li id="masters1"><a href="<?php echo base_url();  ?>years/home">Academic Years</a></li>
                        <li id="masters2"><a href="<?php echo base_url();  ?>years/terms">Academic Terms</a></li>
                        <li id="masters3"><a href="<?php echo base_url(); ?>classadd/addclass">Class & Sections</a></li>
                        <li id="masters4" ><a href="<?php echo base_url(); ?>subjectadd/addsubject">Subjects</a></li>
                        <li id="masters5"><a href="<?php echo base_url(); ?>classmanage/home">Class Management </a></li>


                     </ul>
                  </div>
               </li>


               <li id="admission">
                  <a data-toggle="collapse" href="#admissionmenu">
				 <!-- <img src="<?php echo base_url(); ?>assets/img/icons/Stu.png"/>-->	
                     <i class="pe-7s-add-user"></i>
                     <p>Student's Admission	</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="admissionmenu">
                     <ul class="nav">
                        <li id="admission1"><a href="<?php echo base_url(); ?>admission/home">Student Detail</a></li>
                        <li id="admission2"><a href="<?php echo base_url(); ?>admission/view">Student Search</a></li>
                        <li id="admission3"><a href="<?php echo base_url(); ?>parents/view">Parents Search</a></li>
                     </ul>
                  </div>
               </li>

			   <li id="activities">
                  <a data-toggle="collapse" href="#curricular">
                     <i class="pe-7s-users"></i>
                     <p>Extra-Co curricular</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="curricular">
                     <ul class="nav">
                        <li id="curricular1"><a href="<?php echo base_url(); ?>extracurricular/home">Extra-Co curricular  </a></li>
                        <li id="curricular2"><a href="<?php echo base_url(); ?>groups/home">House Groups</a></li>

                     </ul>
                  </div>
               </li>


               <li id="enroll">
                  <a data-toggle="collapse" href="#enrollmentmenu">
                     <i class="pe-7s-study"></i>
                     <p>Registration	</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="enrollmentmenu">
                     <ul class="nav">
                        <li id="enroll1"><a href="<?php echo base_url(); ?>enrollment/home">Student Registration</a></li>
                        <li id="enroll2"><a href="<?php echo base_url(); ?>enrollment/view">List of Registration</a></li>
                     </ul>
                  </div>
               </li>
               <li id="teacher">
                  <a data-toggle="collapse" href="#teachermenu">
                     <i class="pe-7s-users"></i>
                     <p>Teachers	</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="teachermenu">
                     <ul class="nav">
                        <li id="teacher1"><a href="<?php echo base_url(); ?>teacher/home">Add Teachers</a></li>
                        <li id="teacher2"><a href="<?php echo base_url(); ?>teacher/view">Teachers Search</a></li>
                     </ul>
                  </div>
               </li>

			    <li id="payment">
                  <a data-toggle="collapse" href="#feesmenu">
                     <i class="pe-7s-users"></i>
                     <p>Payment</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="feesmenu">
                     <ul class="nav">
                        <li id="fees"><a href="<?php echo base_url(); ?>feesstructure/fees_master">Fees Structure</a></li>
                        <li id="fees1"><a href="<?php echo base_url(); ?>feesstructure/view_term_fees_master">Fee Status</a></li>
						<li id="fees2"><a href="<?php echo base_url(); ?>quota/home">Quota</a></li>
                     </ul>
                  </div>
               </li>


               <li id="event">
                  <a data-toggle="collapse" href="#eventmenu">
                     <i class="pe-7s-gym"></i>
                     <p>Calender</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="eventmenu">
                     <ul class="nav">
                         <li id="event2"><a href="<?php echo base_url(); ?>event/create">Add / View Event</a></li>
                        <li id="event1"><a href="<?php echo base_url(); ?>event/home">Event Calender</a></li>
                          <li id="leave1"><a href="<?php echo base_url(); ?>leavemanage/home">Add/ View Leave </a></li>


                        <!-- <li><a href="<?php echo base_url(); ?>event/view">View Event</a></li> -->
                     </ul>
                  </div>
               </li>
               <li id="time">
                  <a data-toggle="collapse" href="#timetablemenu">
                     <i class="pe-7s-diskette"></i>
                     <p>TimeTable</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="timetablemenu">
                     <ul class="nav">
                        <li id="time1"><a href="<?php echo base_url(); ?>timetable/home">Add TimeTable</a></li>
                        <li id="time2"><a href="<?php echo base_url(); ?>timetable/manage">View TimeTable</a></li>
                     </ul>
                  </div>
               </li>
               <li id="exam">
                  <a data-toggle="collapse" href="#exammenu">
                     <i class="pe-7s-note2"></i>
                     <p>Examination</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="exammenu">
                     <ul class="nav">
                        <li id="exam1"><a href="<?php echo base_url(); ?>examination/add_exam">Add / View Exams</a></li>
                        <li id="exam2"><a href="<?php echo base_url(); ?>examination/add_exam_detail">Examination Calender</a></li>
                       <li id="exam3"><a href="<?php echo base_url(); ?>examination/exam_name_status">Exam Result Details</a></li>
                     </ul>
                  </div>
               </li>

               <li id="communication">
                  <a data-toggle="collapse" href="#communcicationmenu">
                     <i class="pe-7s-plugin"></i>
                     <p>Communications</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="communcicationmenu">
                     <ul class="nav">
                       <li id="communication1"><a href="<?php echo base_url(); ?>communication/add_communication">Add Circular </a></li>
                       <li id="communication2"><a href="<?php echo base_url(); ?>communication/view">View Circular </a></li>
					   <li id="communication3"><a href="<?php echo base_url(); ?>communication/view_user_leaves">Teachers Leaves </a></li>
                     </ul>
                  </div>
               </li>

			   <li id="onduty">
                  <a data-toggle="collapse" href="#ondutydetails">
                     <i class="pe-7s-plugin"></i>
                     <p>On Duty</p>
                   <b class="caret"></b>
                  </a>
                  <div class="collapse" id="ondutydetails">
                     <ul class="nav">
                        <li id="onduty1"><a href="<?php echo base_url(); ?>onduty/teachers">Teachers</a></li>
                        <li id="onduty2"><a href="<?php echo base_url(); ?>onduty/students">Students</a></li>
                     </ul>
                  </div>
               </li>



               <li id="user">
                  <a data-toggle="collapse" href="#usermanagement">
                     <i class="pe-7s-settings"></i>
                     <p>Control Panel	</p>
                     <b class="caret"></b>
                  </a>
                  <div class="collapse" id="usermanagement">
                     <ul class="nav">
                        <li id="user1"><a href="<?php echo base_url(); ?>userrolemanage/teachers">Teachers</a></li>
                        <li id="user2"><a href="<?php echo base_url(); ?>userrolemanage/parents">Parents</a></li>
                        <li id="user3"><a href="<?php echo base_url(); ?>userrolemanage/students">Students</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </div>
