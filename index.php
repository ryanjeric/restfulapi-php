<?php
//process client request (via url)
 header('Content-Type:application/json');
 require('function.php');

 if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $name = getUsers($id);
    
    if(empty($name)){
        //not found
        deliver_response(200,"User not found",NULL);
    }else{
        //respond
        deliver_response(200,"User found",$name);
    }
 }else{
     //invalid request
     deliver_response(400,"Invalid request",NULL);
 }

 function deliver_response($status,$message,$data){
      header("HTTP/1.1 $status $message");
      $response = [
          'status'=>$status,
          'status_message'=>$message,
          'data'=>$data
      ];
      echo json_encode($response);
 }