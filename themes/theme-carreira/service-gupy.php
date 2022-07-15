<?php 

  header( "Access-Control-Allow-Origin: *" ); 
  header( "Content-Type: application/json; charset=UTF-8" );
  $serverURL="https://api.gupy.io/api/v1/jobs?fields=id,name,status,departmentName,publicationType,disabilities,addressCity&status=published&publicationType=external";
  $token='d2051b38-96a6-48dd-8b05-85c61e94ea22';
  $cl = curl_init();
  curl_setopt($cl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($cl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($cl, CURLOPT_CUSTOMREQUEST, 'GET');
  curl_setopt($cl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $token));
  curl_setopt($cl, CURLOPT_URL,"https://api.gupy.io/api/v1/jobs?fields=id,name,status,departmentName,publicationType,disabilities,addressCity&status=published&publicationType=external"); 
  $response = curl_exec($cl);
  print_r($response);
  echo PHP_EOL;
?>