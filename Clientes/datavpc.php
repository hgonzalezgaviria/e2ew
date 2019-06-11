<?php

$arrIntancias=json_decode($jsonIntancias, true);
function getUrlIp($ip,$num,$app)
{

		switch ($app) {
    case 1://EIC
        if ($num==1){//Estado Ping
		return 'http://'.$ip.':8080/EICW/services/servicesEIC?wsdl';
		}else{
		return 'http://'.$ip.':8080/EICW/servlet/StateEIC';
		}
        break;
    case 2://Nucleo
        if ($num==1){//Estado Ping
		return 'http://'.$ip.':8080/e2di_web/services/servicesNCVP?wsdl';
		}else{
		return 'http://'.$ip.':8080/e2di_web/servlet/Status';
		}
        break;
    case 3://BMI
         if ($num==1){//Estado Ping
		return 'http://'.$ip.':8080/bmi/services/servicesBMI?wsdl';
		}else{
		return 'http://'.$ip.':8080/bmi/servlet/State';
		}
        break;
	case 4://Mbank
         if ($num==1){//Estado Ping
		return 'http://'.$ip.':8080/mBank/services/servicesMB?wsdl';
		}else{
		return 'http://'.$ip.':8080/mBank/servlet/Status';
		}
        break;
	case 5://auth
         if ($num==1){//Estado Ping
		return 'http://'.$ip.':8080/app_auth/';
		}else{
		return 'http://'.$ip.':8080/EICW/servlet/StateEIC';
		}
        break;
	case 6://HB
      if ($num==1){//Estado Ping
		return 'http://'.$ip.':8080/HOMEBANKING/';
		}else{
		return 'http://'.$ip.':8080/HOMEBANKING/servlet/State';
		}
        break;
	case 7://Banco
            if ($num==1){//Estado Ping
		return 'http://'.$ip.':8080/E2FBANCO/';
		}else{
		return 'http://'.$ip.':8080/E2FBANCO/servlet/State';
		}
        break;

	}

}

	foreach($arrIntancias as $clave1){
		foreach($clave1 as $clave2){
			foreach($clave2 as $clave3){
				foreach($clave3 as $clave4=>$elemet){

					$ipPrivada=$elemet['PrivateIpAddress'];
					$idInstancia=$elemet['InstanceId'];
					$tipoIntancia=$elemet['InstanceType'];
					$enableZone=$elemet['Placement']['AvailabilityZone'];
					$ipPublica=$elemet['PublicIpAddress'];

						switch ($typeApp) {
							case 1:
							include('dtavpce2ewservices.php');
							break;
							case 2:
							include('dtavpce2ewweb.php');
							break;
							case 3:
							include('dtavpce2ewsecurity.php');
							break;
							case 4:
							include('dtavpce2ewid.php');
							break;
							default:
							require_once('../Layouts/error.php');
							}
				}
			//echo $tas;
			}
		}
	}	//END foreach

?>
