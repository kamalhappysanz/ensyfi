<?php

Class Sectionmodel extends CI_Model
{

  public function __construct()
  {
      parent::__construct();

  }

//GET ALL SECTION

       function getsection(){
         $query="SELECT * FROM edu_sections";
         $resultset=$this->db->query($query);
         return $resultset->result();
       }


//CREATE SECTION NAME
       function addsection($sectionname){
           $check_class="SELECT * FROM edu_sections WHERE sec_name='$sectionname'";
           $res=$this->db->query($check_class);
           if($res->num_rows()==0){
           $query="INSERT INTO edu_sections (sec_name) VALUES ('$sectionname')";
           $resultset=$this->db->query($query);
           $data= array("status" => "success");
            return $data;
           }else{
             $data= array("status" => "Already exist");
              return $data;

         }


       }

//GET SPECIFIC SECTION NAME
       function update_section($sec_id){
         $query="SELECT * FROM edu_sections WHERE sec_id='$sec_id'";
         $resultset=$this->db->query($query);
         return $resultset->result();
       }


//UPDATE SECTION NAME
       function save_section($sec_name,$sec_id){
         $check_class="SELECT * FROM edu_sections WHERE sec_name='$sec_name'";
         $res=$this->db->query($check_class);
         if($res->num_rows()==0){
          $query="UPDATE edu_sections SET sec_name='$sec_name' WHERE sec_id='$sec_id'";
          $resultset=$this->db->query($query);
          $data= array("status" => "success");
          return $data;
        }else{
          $data= array("status" => "Already exist");
           return $data;
        }
       }

//DELETE SECTION NAME

       function delete_section($sec_id){
          $query="DELETE FROM edu_sections WHERE sec_id='$sec_id'";
          $resultset=$this->db->query($query);
         $data= array("status" => "success");
         return $data;

       }

}
?>
