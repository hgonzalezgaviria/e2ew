<!DOCTYPE html>
<html lang="es">
<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- LIBRERIAS BOOTSTRAP-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/estilo.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../bootstrap/js/mydialogo.js"></script>	


</head>
<script type="text/javascript">
		$(document).ready(function() {
				$('#seccionRecargar').click(function() {
						// Recargo la página
						location.reload();
				});
		});
//alert(URLdomain);
 //var URLdomain = window.location.host;
 //document.getElementById('resultado').innerHTML = URLdomain;
 //window.onload = function what(){
//document.getElementById('resultado').innerHTML = URLdomain;
//};
</script>

<style type="text/css">
a.class_a_href{
pointer-events: none;
cursor: default;
}
</style>

<div class="container">
  <h3 style="text-align: center;">Estado de Aplicaciones</h3>

  <?php
	echo "<br>";
  require_once('metadata.php');
  include('../estados/estados.php');  
  if ($path_position){ //dns actual (ELB)
		require_once('datavpc.php');
	//echo "holaa binn";
	}else{
		
	switch ($typeApp) {
    case 1:
	require_once('pne2ewservices.php');
        break;
    case 2:
        require_once('pne2ewweb.php');
        break;
    case 3:
         require_once('pne2ewsecurity.php');
        break;
	case 4:
         require_once('pne2ewid.php');
        break;
	default:
	require_once('../Layouts/error.php');
	}		


	}

  ?>

</div>



<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:1000px;" id='myModalDialog1' role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Estados</h4>
			</div>
			<div class="modal-body">
				<iframe id="modalContent1" frameborder="0" style="width: 100%; min-height: 30rem;"></iframe>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="universalModal" tabindex="-1" role="dialog" aria-labelledby="universalModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:1000px;" id='myModalDialog' role="document">
    <div class="modal-content">
      <form role="form" id="universalModalForm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"> Close</span></button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-pencil"></span> Edit<span class="modal-title">.model-title</span></h4>
        </div>
        <div class="alert alert-danger fade in" id="universalModal-alert" style="display: none;">
          <span class="alert-body"></span>
        </div>
        <div class="modal-body">
		<iframe id="modalContent" frameborder="0" style="width: 100%; min-height: 30rem;"></iframe>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <!--button type="submit" class="btn btn-primary" id="submitBtn"></button-->
        </div>
      </form>
    </div>
  </div>
</div>
