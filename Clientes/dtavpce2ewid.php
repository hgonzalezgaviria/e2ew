  <?php
echo "<div class='col-xs-8 col-sm-3 col-md-4 col-lg-3'>";
					echo "<div class='panel panel-default'>";
						echo "<div class='panel-heading'><b>ID:</b>".$idInstancia."<br><b>Type:</b>".$tipoIntancia."<br><b>Zone:</b>".$enableZone."<br><b>Ip:</b>".$ipPrivada."<br><b>Ip pub:</b>".$ipPublica;
						echo "<a onclick = accionLogs('".$ipPublica."');><span data-toggle='tooltip' title='Limpiar Logs' class='pull-right glyphicon glyphicon-remove'></span></a>";
						echo "<a href=javascript:myModal('http://".$ipPublica."/logs/');><span data-toggle='tooltip' title='Logs' class='pull-right glyphicon glyphicon-eye-open'></span></a>";
						echo "</div>";
						echo "<div class='panel-body'></div>";
						echo "<table class='table'>";
							echo "<thead>";
							echo "<tr>";
							echo "<th scope='col'></th>";
							echo "<th>App</th>";
							echo "<th>Ping</th>";
							echo "<th>EAI</th>";
							echo "<th>E</th>";
							echo "</tr>";
							echo "</thead>";
							echo "<tbody>";
								echo "<tr> <th scope='row'></th>";
								echo "<td>AUTH</td>";
								echo "<td>";
								if(statusPing(getUrlIp($ipPrivada,1,5))=="Activo"){
								echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
								}elseif(statusPing(getUrlIp($ipPrivada,1,5))=="Inactivo"){
								echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}
								echo "</td>";

								 echo "<td>";
								 /*
								 if(statusEAI(getUrlIp($ipPrivada,2,1))=="Activo"){
									echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
									}elseif(statusEAI(getUrlIp($ipPrivada,2,1))=="Inactivo"){
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
									else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									*/
								echo "</td>";

								echo "<td><a href=javascript:myModal('http://".$ipPublica.":8080/app_auth/');><span data-toggle='tooltip' title='AUTH STATUS' class='glyphicon glyphicon-link'></span></a></td>";
								echo "</tr>";//fin AUTH								
							echo " </tbody>";
						echo "</table>";
					echo "</div>";
					echo "</div>";

  ?>
