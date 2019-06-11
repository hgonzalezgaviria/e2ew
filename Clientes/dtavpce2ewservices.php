  <?php
	echo "<div class='col-xs-8 col-sm-3 col-md-4 col-lg-3'>";
					echo "<div class='panel panel-default'>";
						echo "<div class='panel-heading'><b>ID:</b>".$idInstancia."<br><b>Type:</b>".$tipoIntancia."<br><b>Zone:</b>".$enableZone."<br><b>Ip:</b>".$ipPrivada."<br><b>Ip pub:</b>".$ipPublica;
						echo "<a onclick = accionLogs('".$ipPublica."');><span data-toggle='tooltip' title='Limpiar Logs' class='pull-right glyphicon glyphicon-remove'></span></a>";
						echo "<a href=javascript:myModal('http://".$ipPublica."/services/logs/');><span data-toggle='tooltip' title='Logs' class='pull-right glyphicon glyphicon-eye-open'></span></a>";
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
								echo "<td>EIC</td>";
								echo "<td>";
								//echo $urlpingEIC;
								if(statusPing(getUrlIp($ipPrivada,1,1))=="Activo"){
								echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
								}elseif(statusPing(getUrlIp($ipPrivada,1,1))=="Inactivo"){
								echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}
								echo "</td>";
								 echo "<td>";
								 if(statusEAI(getUrlIp($ipPrivada,2,1))=="Activo"){
									echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
									}elseif(statusEAI(getUrlIp($ipPrivada,2,1))=="Inactivo"){
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
									else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
								echo "</td>";
								echo "<td><a href=javascript:myModal('http://".$ipPublica.":8080/EICW/servlet/StateEIC');><span data-toggle='tooltip' title='EICW STATUS' class='glyphicon glyphicon-link'></span></a></td>";
								echo "</tr>";//fin EIC
								echo "<tr> <th scope='row'></th>";
								echo "<td>E2DI</td>";
								echo "<td>";
								if(statusPing(getUrlIp($ipPrivada,1,2))=="Activo"){
								echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
								}elseif(statusPing(getUrlIp($ipPrivada,1,2))=="Inactivo"){
								echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}
								echo "</td>";
								 echo "<td>";
								 if(statusEAI(getUrlIp($ipPrivada,2,2))=="Activo"){
									echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
									}elseif(statusEAI(getUrlIp($ipPrivada,2,2))=="Inactivo"){
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
									else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
								echo "</td>";
								echo "<td><a href=javascript:myModal('http://".$ipPublica.":8080/e2di_web/servlet/Status');><span data-toggle='tooltip' title='Nucleo STATUS' class='glyphicon glyphicon-link'></span></a></td>";
								echo "</tr>";//fin Nucleo
								echo "<tr> <th scope='row'></th>";
								echo "<td>BMI</td>";
								echo "<td>";
								if(statusPing(getUrlIp($ipPrivada,1,3))=="Activo"){
								echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
								}elseif(statusPing(getUrlIp($ipPrivada,1,3))=="Inactivo"){
								echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}
								echo "</td>";
								 echo "<td>";
								 if(statusEAI(getUrlIp($ipPrivada,2,3))=="Activo"){
									echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
									}elseif(statusEAI(getUrlIp($ipPrivada,2,3))=="Inactivo"){
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
									else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
								echo "</td>";
								echo "<td><a href=javascript:myModal('http://".$ipPublica.":8080/bmi/servlet/State');><span data-toggle='tooltip' title='BMI STATUS' class='glyphicon glyphicon-link'></span></a></td>";
								echo "</tr>";//fin BMI
								echo "<tr> <th scope='row'></th>";
								echo "<td>MBANK</td>";
								echo "<td>";
								if(statusPing(getUrlIp($ipPrivada,1,4))=="Activo"){
								echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
								}elseif(statusPing(getUrlIp($ipPrivada,1,4))=="Inactivo"){
								echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}
								echo "</td>";
								 echo "<td>";
								 if(statusEAI(getUrlIp($ipPrivada,2,4))=="Activo"){
									echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
									}elseif(statusEAI(getUrlIp($ipPrivada,2,4))=="Inactivo"){
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
									else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
								echo "</td>";
								echo "<td><a href=javascript:myModal('http://".$ipPublica.":8080/mBank/servlet/Status');><span data-toggle='tooltip' title='mbank STATUS' class='glyphicon glyphicon-link'></span></a></td>";
								echo "</tr>";//fin mbank
							echo " </tbody>";
						echo "</table>";
					echo "</div>";
					echo "</div>";	

  ?>
