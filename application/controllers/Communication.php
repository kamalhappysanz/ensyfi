<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Communication extends CI_Controller
{
      function __construct()
      {
      parent::__construct();
      $this->load->model('communicationmodel');
      $this->load->model('subjectmodel');
	  $this->load->model('smsmodel');
      $this->load->model('class_manage');
      $this->load->helper('url');
      $this->load->library('session');
      }
     
		  public function view_user_leaves()
		  {
			  $datas=$this->session->userdata();
              $user_id=$this->session->userdata('user_id');
			  $user_type=$this->session->userdata('user_type');
			  $datas['result']=$this->communicationmodel->user_leaves();
			  //echo'<pre>';print_r($datas['result']);exit;
			  if($user_type==1)
                {
				  $this->load->view('header');
				  $this->load->view('communication/users_leave',$datas);
				  $this->load->view('footer');
				 }else{
				  redirect('/');
				  }
			   
		  }
		  public function user_leave_approval($leave_id)
		   {
			$datas=$this->session->userdata();
  	 		$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			$datas['res']=$this->communicationmodel->edit_leave($leave_id);
			$datas['leaves']=$this->communicationmodel->get_all_leave($leave_id);
			//echo'<pre>';print_r($datas['res']);exit;
			 if($user_type==1){
	 		 $this->load->view('header');
			 $this->load->view('communication/user_leave_approval',$datas);
	 		 $this->load->view('footer');
	 		 }
	 		 else{
	 				redirect('/');
	 		 }
			
		 }
		
		public function update_status()
		{
			$datas=$this->session->userdata();
  	 		$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			
			$leave_type=$this->input->post('leaves_type');
			
			//$leave_date=$this->input->post('leave_date');
			 $number=$this->input->post('cell');
			//$to_time=$this->input->post('to_time');
			//$leave_description=$this->input->post('leave_description');
			 $leave_id=$this->input->post('leave_id');
			 $status=$this->input->post('status');
             //echo $leave_type; echo $status;exit;
			 //$dateTime = new DateTime($leave_date);
             //$formatted_date=date_format($dateTime,'Y-m-d' );
			 //echo $status; exit;
			 $datas=$this->communicationmodel->update_leave($leave_id,$status);
			 if($status=='Approved')
			 { 
			    $datas['sms']=$this->smsmodel->send_sms_for_teacher_leave($number,$leave_type); 
			     
			 }
		 
			// $datas['result']=$this->communicationmodel->user_leaves();
			
			 //print_r($datas['sms']);exit;
			
			 if($datas['status']=="success")
			  {
				$this->session->set_flashdata('msg','Updated Successfully');
                $this->load->view('header');
				redirect('communication/view_user_leaves');
				//$this->load->view('communication/users_leave',$datas);
				$this->load->view('footer');
			  }else{
			    $this->session->set_flashdata('msg','Falid To Updated');
                $this->load->view('header');
				redirect('communication/view_user_leaves');
				//$this->load->view('communication/users_leave',$datas);
				$this->load->view('footer');	  
			  }
			
		}


		public function add_substitution($leave_id)
		{
			$datas=$this->session->userdata();
  	 		$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
		
			$datas=$this->communicationmodel->get_all_class_list($leave_id);
			$datas['teachers']=$this->communicationmodel->get_all_teachers_list($leave_id);
			$datas['view']=$this->communicationmodel->get_all_view_list($leave_id);
			//echo '<pre>';print_r($datas['view']);exit;
		    //print_r($datas['res']);exit;
			 if($user_type==1){
	 		 $this->load->view('header');
			 $this->load->view('communication/add_substitution',$datas);
	 		 $this->load->view('footer');
	 		 }
	 		 else{
	 				redirect('/');
	 		 }
		}
		
		public function create_substition()
		{
			$datas=$this->session->userdata();
  	 		$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			
			$cls_id=$this->input->post('sub_cls');
			$teacher_id=$this->input->post('teacher_id');
			$tname=$this->input->post('tname');
			$ldate=$this->input->post('leave_date');
			$leave_id=$this->input->post('leave_id');
			
			$dateTime = new DateTime($ldate);
            $leave_date=date_format($dateTime,'Y-m-d' );
	  
			$steacher=$this->input->post('sub_teacher');
			//$sub_teacher1=strstr('-',$sub_teacher)
			 $sub_teacher=strstr($steacher,'-',true);
			 $stname=strstr($steacher,'-');
			 $sub_tname=str_replace("-","",$stname);
			// echo $sub_teacher; echo $sub_tname;  exit;
			
			$period_id=$this->input->post('period_id');
			$status=$this->input->post('status');
			
			$datas=$this->smsmodel->send_sms_for_teacher_substitution($tname,$sub_teacher,$sub_tname,$leave_date); 
			$datas['res']=$this->communicationmodel->add_substitution_list($user_id,$cls_id,$teacher_id,$leave_date,$sub_teacher,$period_id,$leave_id,$status);
			//print_r($datas['res']);exit;


			if($datas['status']=="success"){
				 $this->session->set_flashdata('msg','Added Successfully');
				 redirect('communication/add_substitution/'.$leave_id.'');
			  }elseif($datas['status']=="Already_Exist")
			  {
				$this->session->set_flashdata('msg','Already Exist');
				redirect('communication/add_substitution/'.$leave_id.'');
			  }else{
			     $this->session->set_flashdata('msg','Added Successfully');
				 redirect('communication/add_substitution/'.$leave_id.'');
			  }
		}
		
		public function sub_edit()
		{
			$datas=$this->session->userdata();
  	 		$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			
			$id=$this->input->get('v');
			$teacher_id=$this->input->get('v1');
			//echo $teacher_id;exit;
			$datas=$this->communicationmodel->get_all_class_list1($teacher_id);
			$datas['result']=$this->communicationmodel->edit_substitution_list($id);
			//$datas['view']=$this->communicationmodel->get_all_view_list1($teacher_id);
			//print_r($datas['result']);exit;
			$this->load->view('header');
			$this->load->view('communication/edit_substitution',$datas);
	 		$this->load->view('footer');
			
			
		}
		public function update_substition()
		{
			
			$datas=$this->session->userdata();
  	 		$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			
			$cls_id=$this->input->post('sub_cls');
			$teacher_id=$this->input->post('teacher_id');
			$ldate=$this->input->post('leave_date');
			$id=$this->input->post('id');
			$leave_id=$this->input->post('lid');
			
			$dateTime = new DateTime($ldate);
            $leave_date=date_format($dateTime,'Y-m-d' );
	  
			$sub_teacher=$this->input->post('sub_teacher');
			$period_id=$this->input->post('period_id');
			$status=$this->input->post('status');
			//echo $sub_teacher;
			$datas=$this->communicationmodel->update_substitution_list($user_id,$cls_id,$teacher_id,$leave_date,$sub_teacher,$period_id,$id,$status);
			//print_r($datas);exit;
			if($datas['status']=="success")
			{
			 $this->session->set_flashdata('msg','Updated Successfully');
			 redirect('communication/add_substitution/'.$leave_id.'');
		    }else{
			 $this->session->set_flashdata('msg','Falid To Update');
			 redirect('communication/add_substitution/'.$leave_id.'');
			  }
			
		}
		
}
