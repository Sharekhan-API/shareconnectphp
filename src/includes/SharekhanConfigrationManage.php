<?php
namespace Sharekhan;

class SharekhanConfigrationManage
{
	
	public static function SharekhanConfigrationData()
	{
			
				
	 		$Configration = 

			    [
			        "root" => "https://api.sharekhan.com/skapi/services",
				    "login" =>"https://api.sharekhan.com/skapi/auth/login.html?",
					"token" =>"/access/token",
					"place" =>"/orders",
					"modify" =>"/orders",
					"cancel" =>"/orders",
					"funds" =>"/limitstmt",
					"report" =>"/reports",
					"position" =>"/trades",
					"history" =>"/reports",
					"trades" =>"/reports",
					"holdings" =>"/holdings",
					"master" =>"/master",
					"historical" =>"/historical",
				    "debug" => false,
				    "timeout" => 7000,
				   
				    "generate_token" => "/access/token",
				  
				];



			return $Configration;	
	}	
	
	
	
}		
?>