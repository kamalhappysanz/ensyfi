<?php
Class Smsmodel extends CI_Model
{

 public function __construct()
  {
      parent::__construct(); 

  }
  
  function send_sms_for_teacher_leave($number,$status)
  {
	// http://173.45.76.227/send.aspx?username=kvmhss&pass=kvmhss123&route=trans1&senderid=KVMHSS&numbers=12345&message=WELCOME

	
	$smsGatewayUrl = 'http://173.45.76.227/send.aspx?';

	$api_element = 'username=kvmhss&pass=kvmhss123&route=trans1&senderid=KVMHSS';
	
    $api_params = $api_element.'&numbers='.$number.'&message='.$status;
	
	$smsgatewaydata = $smsGatewayUrl.$api_params;

	$url = $smsgatewaydata;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, false);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	$output = curl_exec($ch);
	curl_close($ch);

	if(!$output)
	{
      $output =  file_get_contents($smsgatewaydata);
    }

   if($return == '1')
   {
    return $output;        
   }else
   {
    echo "Sent";
   }

 } 
  
  
  
  
  
  
}
	  ?>