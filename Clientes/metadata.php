<?php
$typeApp=0;
$nameServer="";
$site_path_var =  apache_getenv("AS_URL_ELB");
$path_position=false;
$urlbase="http://169.254.169.254/latest/meta-data/";
$urlbaseip="169.254.169.254";
$urlip= "http://169.254.169.254/latest/meta-data/local-ipv4"; //IP privada v4
$urlzone = "http://169.254.169.254/latest/meta-data/placement/availability-zone"; //La zona de disponibilidad en la que se ha lanzado la instancia.
$urlippub = "http://169.254.169.254/latest/meta-data/public-ipv4"; //IP publica v4
$urlInstaId = "http://169.254.169.254/latest/meta-data/instance-id"; //ID Instancia
$urlInstaType = "http://169.254.169.254/latest/meta-data/instance-type"; //Instancia Type



//Datos de instancias disponibles por VPC --> aws ec2 describe-instances

$tmpIpPub = shell_exec('sh /u01/app/hbuser/admin/scripts/bin/aws/awsdata public-ipv4');
$tmpZonaEnable = shell_exec('sh /u01/app/hbuser/admin/scripts/bin/aws/awsdata placement/availability-zone');
$tmpZonaEnableValida = substr ($tmpZonaEnable, 0, strlen($tmpZonaEnable) - 1);
$typeNode = trim(shell_exec("sh /u01/app/hbuser/admin/scripts/bin/aws/typeserver.sh '".$tmpZonaEnableValida."' '".$tmpIpPub."'"));

$tmpidVpc = shell_exec("sh /u01/app/hbuser/admin/scripts/bin/aws/idvpc.sh '".$tmpZonaEnableValida."' '".$tmpIpPub."' '".$typeNode."'");
$vpcId=trim($tmpidVpc);
$jsonIntancias = shell_exec("sh /u01/app/hbuser/admin/scripts/bin/aws/datavpc.sh '".$tmpZonaEnableValida."' '".$vpcId."' '".$typeNode."'");


switch ($typeNode) {
    case "e2ewservices":
	$typeApp=1;
	$nameServer="e2ew Services";
        break;
    case "e2ewweb":
        $typeApp=2;
		$nameServer="e2ew Web";
        break;
    case "InttegrioSecurity":
         $typeApp=3;
		 $nameServer="e2ew Security";
        break;
	case "e2ewid":
         $typeApp=4;
		 $nameServer="e2ew ID";
        break;
	}


#var_dump($typeApp);

// se debe pasar la IP o direccion de internet sin 'http://'
if (ValidarUrl($urlbaseip)){
 //echo "Dirección existente";
 $ip= curlMetadatos($urlip);
 $ippub= curlMetadatos($urlippub);
 $zone= curlMetadatos($urlzone);
 $insid= curlMetadatos($urlInstaId);
 $instype= curlMetadatos($urlInstaType);
}else{
 echo "Dirección aws inexistente, Error en obtener Metadatas";
}

function ValidarUrl($url) {
 //fsockopen -> Abrir una conexión de sockets de dominio de Internet o Unix
 //resource fsockopen ( string destino, int puerto [, int errno [, string errstr [, float tiempo_espera]]])
 $validar = @fsockopen($url, 80, $errno, $errstr, 15);
 if ($validar) {
  fclose($validar);
  return true;
 }else
  return false;
}


//Obtiene datos de la instancia a través de la url meta-data
function curlMetadatos($url){
	$handler = curl_init();
	curl_setopt($handler, CURLOPT_URL, $url);
	curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);
	//$urlIp = curl_exec ($handler);
	 return curl_exec ($handler);
	 curl_close ($handler);
}
//Valida URL Origen
function url_origin($s, $use_forwarded_host=false) {
  $ssl = ( ! empty($s['HTTPS']) && $s['HTTPS'] == 'on' ) ? true:false;
  $sp = strtolower( $s['SERVER_PROTOCOL'] );
  $protocol = substr( $sp, 0, strpos( $sp, '/'  )) . ( ( $ssl ) ? 's' : '' );

  $port = $s['SERVER_PORT'];
  $port = ( ( ! $ssl && $port == '80' ) || ( $ssl && $port=='443' ) ) ? '' : ':' . $port;

  $host = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
  $host = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;

  return $protocol . '://' . $host;
}

function full_url( $s, $use_forwarded_host=false ) {
  return url_origin( $s, $use_forwarded_host );
}

//$absolute_url = full_url( $_SERVER );
//var_dump($absolute_url);


//$enlace_actual = 'http://'.$_SERVER['HTTP_HOST'];
//Obtiene enlace actual
$enlace_actual = $absolute_url = full_url( $_SERVER );
if ($enlace_actual==$site_path_var){ //dns actual (ELB)
		$enlace_actual = full_url( $_SERVER );
	$path_position=true;
	}else{
		$enlace_actual = 'https://'.$_SERVER['HTTP_HOST'].':8181';
		$path_position=false;
	}

//var_dump($ip);
//$ip = getenv('USER');
		//$ip = $_SERVER['USER'];
 ?>
