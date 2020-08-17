<?php
   define( 'API_ACCESS_KEY', 'AAAAyHNa8Lk:APA91bHi9NKDonI_WcVs2djNgWT5Ej04cofW947pOGAHRUnbCnnNcRH0NGAzrShbDJCnTcpuStuT929eZgd48YVomoc0cfOu3v4JgB8EPLtwrin-6JTF13aLVQllXpwRSfVaO0CEn1ur');
   $registrationIds = array("cGBqpRUBQ_ikpxe40TQb3l:APA91bGPdp-ZZiBfpkLJruYZ8r_buddU8eSm0GYrwnmnXfj04HFzJAzxaCP2af6xbA0g8QyTIzcHwmFkYoTfIhMNhMWZCIdRTzYh9I8S3CZcJvswEa12tDU1dnu3YdBYIJ_FV-EKMJnH");
   
    
     $msg = array
          (
		'title'	=> 'Hello World',
		'message'	=> 'Hello World',
		
          );
		  				//'registration_ids'		=> $registrationIds,

	$fields = array
			(
				'registration_ids' => $registrationIds,
				'data' => $msg
			);
	
	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
#Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		curl_close( $ch );
#Echo Result Of FireBase Server
echo $result;
?>