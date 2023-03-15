<?php

namespace App\Traits;

trait Helpers{

	function sendMessage($data){
	    $content = array(
	        "en" => $data
	    );

	    $fields = array(
	        'app_id' => "7e3f5328-41df-4280-9e83-d8c565533fe4",
	        'included_segments' => array('All'),
	        'data' => array(
	            "foo" => "bar"
	        ),
	        'contents' => $content
	    );

	    $fields = json_encode($fields);
	    print("\nJSON sent:\n");
	    print($fields);

	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
	                                               'Authorization: Basic ODAyMWI2ZWYtNTg2MS00NDVhLWJiOTItZWQyODliNmVlNTRh'));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	    curl_setopt($ch, CURLOPT_HEADER, FALSE);
	    curl_setopt($ch, CURLOPT_POST, TRUE);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	    $response = curl_exec($ch);
	    curl_close($ch);

	    return $response;
	}
	
	function usernotification($id,$data){
	    $content = array(
	        "en" => $data
	    );

	    $fields = array(
	        'app_id' => "7e3f5328-41df-4280-9e83-d8c565533fe4",
	        'include_player_ids' => array($id),
	        'data' => array(
	            "foo" => "bar"
	        ),
	        'contents' => $content
	    );

	    $fields = json_encode($fields);
	    print("\nJSON sent:\n");
	    print($fields);

	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
	                                               'Authorization: Basic ODAyMWI2ZWYtNTg2MS00NDVhLWJiOTItZWQyODliNmVlNTRh'));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	    curl_setopt($ch, CURLOPT_HEADER, FALSE);
	    curl_setopt($ch, CURLOPT_POST, TRUE);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	    $response = curl_exec($ch);
	    curl_close($ch);

	    return $response;
	}

}