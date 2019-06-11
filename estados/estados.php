<?php

#require_once('Clientes/metadata.php');
$estadoPing='';
$estadoEAI='';
//$url='http://'.$ip.':8080/EICW/services/servicesEIC?wsdl';
//$urlState='http://'.$ip.':8080/EICW/servlet/StateEIC';
//$content="";
//echo $url;

//ping
function get_http_response_code($url) {
  $headers = get_headers($url);
  return substr($headers[0], 9, 3);
}

function statusPing($url){
//var_dump($url);
$get_http_response_code = get_http_response_code($url);
$estadoPing='Inactivo';
if ( $get_http_response_code == 200 ) {  
  $estadoPing="Activo";
} else {  
  $estadoPing="Inactivo";
}
	return $estadoPing;
}

//EAI
function statusEAI($url){
//var_dump($url);
$content="";
$estadoEAI='Inactivo';
$content = file_get_contents($url);
if ($content){
$cadena_de_texto = $content;
$cadena_buscada   = 'INICIADO';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
if ($posicion_coincidencia === false) {
  $estadoEAI="Inactivo";
}else{
  $estadoEAI="Activo";
}
}else{
	$content="";
}
return $estadoEAI;

}

/*
require_once 'HTTP/Request2.php';
$request = new HTTP_Request2($url, HTTP_Request2::METHOD_GET);
try {
    $response = $request->send();
    if (200 == $response->getStatus()) {
      $estadoPing="Activo";
//  echo $response->getBody();//Get content of page
//var_dump($response->getStatus());
    } else {
      $estadoPing="Inactivo";
//echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .$response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
  //  echo 'Error: ' . $e->getMessage();
}
*/



?>