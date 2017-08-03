<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grouping extends CI_Controller {


	function __construct() {
		 parent::__construct();
			$this->load->model('groupingmodel');
			$this->load->model('teachermodel');
			$this->load->model('classmodel');
			$this->load->model('class_manage');
		  $this->load->helper('url');
		  $this->load->library('session');
			$this->load->library('encrypt');


 }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 // Class section


	 	public function home(){
	 		$datas=$this->session->userdata();
	 		$user_id=$this->session->userdata('user_id');
			$datas['list_of_teacher'] = $this->teachermodel->get_all_teacher();
			$datas['list_of_grouping']=$this->groupingmodel->get_all_grouping();
			$user_type=$this->session->userdata('user_type');
			if($user_type==1){
	 		 $this->load->view('header');
	 		 $this->load->view('grouping/add',$datas);
	 		 $this->load->view('footer');
	 		 }
	 		 else{
	 				redirect('/');
	 		 }
	 	}


		public function create_group(){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			if($user_type==1){
				$group_title=$this->input->post('group_title');
				$group_lead=$this->input->post('group_lead');
				$status=$this->input->post('status');
				$data=$this->groupingmodel->create_group($group_title,$group_lead,$status,$user_id);
				if($data['status']=="success"){
					echo "success";
				}else if($data['status']=="Already"){
					echo "Already Exist";
				}else{
					echo "Something Went Wrong";
				}
			}else{
					redirect('/');
			}
		}



		public function view_members($id){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			if($user_type==1){
				$datas['res']=$this->groupingmodel->view_members_in_groups($id);
				$datas['res_group_name']=$this->groupingmodel->get_group_name($id);
				$datas['res_class']=$this->groupingmodel->get_all_classes_for_year();
				//print_r($datas['res']);exit;
				$datas['id']=$id;
				$this->load->view('header');
				$this->load->view('grouping/view_members',$datas);
				$this->load->view('footer');

			}else{
					redirect('/');
			}
}


	public function getListstudent(){
		$datas=$this->session->userdata();
		$user_id=$this->session->userdata('user_id');
		$user_type=$this->session->userdata('user_type');
		if($user_type==1){
			$class_master_id=$this->input->post('class_master_id');
			$data['res']=$this->groupingmodel->getListstudent($class_master_id);
			echo json_encode($data['res']);
		}else{
				redirect('/');
		}
	}


		public function adding_members_to_group(){
			$datas=$this->session->userdata();
			$user_id=$this->session->userdata('user_id');
			$user_type=$this->session->userdata('user_type');
			if($user_type==1){
				$members_id=$this->input->post('members_id');
				$group_id=$this->input->post('group_id');
				$status=$this->input->post('status');
				$data=$this->groupingmodel->adding_members_to_group($members_id,$group_id,$status,$user_id);
				if($data['status']=="success"){
					echo "success";
				}else if($data['status']=="already"){
					echo "Already Exist";
				}else{
					echo "Something Went Wrong";
				}
			}else{
					redirect('/');
			}
		}






















}
