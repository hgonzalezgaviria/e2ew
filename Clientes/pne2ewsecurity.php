<?php

		echo "<div class='col-xs-8 col-sm-3 col-md-4 col-lg-3'>";
					echo "<div class='panel panel-default'>";
						echo "<div class='panel-heading'><b>ID:</b>".$insid."<br><b>Type:</b>".$instype."<br><b>Zone:</b>".$zone."<br><b>Ip:</b>".$ip."<br><b>Ip pub:</b>".$ippub;
						echo "<a onclick = accionLogs('".$ippub."');><span data-toggle='tooltip' title='Limpiar Logs' class='pull-right glyphicon glyphicon-remove'></span></a>";
						echo "<a href=javascript:myModal('/logs/');><span data-toggle='tooltip' title='Logs' class='pull-right glyphicon glyphicon-eye-open'></span></a>";
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
								if(statusPing('http://'.$ip.':8080/EICW/services/servicesEIC?wsdl')=="Activo"){
								echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
								}elseif(statusPing('http://'.$ip.':8080/EICW/services/servicesEIC?wsdl')=="Inactivo"){
								echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}
								echo "</td>";
								 echo "<td>";
								 if(statusEAI('http://'.$ip.':8080/EICW/servlet/StateEIC')=="Activo"){
									echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
									}elseif(statusEAI('http://'.$ip.':8080/EICW/servlet/StateEIC')=="Inactivo"){
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
									else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
								echo "</td>";
								echo "<td><a href=javascript:myModal('http://".$ippub.":8080/EICW/servlet/StateEIC');><span data-toggle='tooltip' title='EICW STATUS' class='glyphicon glyphicon-link'></span></a></td>";
								echo "</tr>";
							echo " </tbody>";
						echo "</table>";
					echo "</div>";
					echo "</div>";

  ?>
