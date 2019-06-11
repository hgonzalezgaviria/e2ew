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
								echo "<td>AUTH</td>";
								echo "<td>";
								if(statusPing('http://'.$ip.':8080/app_auth/')=="Activo"){
								echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
								}elseif(statusPing('http://'.$ip.':8080/app_auth/')=="Inactivo"){
								echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}
								echo "</td>";

								 echo "<td>";
								echo "</td>";

								echo "<td><a href=javascript:myModal('http://".$ippub.":8080/app_auth/');><span data-toggle='tooltip' title='AUTH STATUS' class='glyphicon glyphicon-link'></span></a></td>";
								echo "</tr>";//Fin AUTH
								echo "<tr> <th scope='row'></th>";
								echo "<td>HB</td>";
								echo "<td>";
								if(statusPing('http://'.$ip.':8080/HOMEBANKING/')=="Activo"){
								echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
								}elseif(statusPing('http://'.$ip.':8080/HOMEBANKING/')=="Inactivo"){
								echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}
								echo "</td>";
								 echo "<td>";
								 if(statusEAI('http://'.$ip.':8080/HOMEBANKING/servlet/State')=="Activo"){
									echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
									}elseif(statusEAI('http://'.$ip.':8080/HOMEBANKING/servlet/State')=="Inactivo"){
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
									else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
								echo "</td>";
								echo "<td><a href=javascript:myModal('http://".$ippub.":8080/HOMEBANKING/servlet/State');><span data-toggle='tooltip' title='HB STATUS' class='glyphicon glyphicon-link'></span></a></td>";
								echo "</tr>";//Fin HB
								echo "<tr> <th scope='row'></th>";
								echo "<td>BANCO</td>";
								echo "<td>";
								if(statusPing('http://'.$ip.':8080/E2FBANCO/')=="Activo"){
								echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
								}elseif(statusPing('http://'.$ip.':8080/E2FBANCO/')=="Inactivo"){
								echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
								}
								echo "</td>";
								 echo "<td>";
								 if(statusEAI('http://'.$ip.':8080/E2FBANCO/servlet/State')=="Activo"){
									echo "<img src='../img/ok.png' border='0' width='20' height='20'>";
									}elseif(statusEAI('http://'.$ip.':8080/E2FBANCO/servlet/State')=="Inactivo"){
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
									else{
									echo "<img src='../img/nok.png' border='0' width='20' height='20'>";
									}
								echo "</td>";
								echo "<td><a href=javascript:myModal('http://".$ippub.":8080/E2FBANCO/servlet/State');><span data-toggle='tooltip' title='Banco STATUS' class='glyphicon glyphicon-link'></span></a></td>";
								echo "</tr>";//fin Banco
							echo " </tbody>";
						echo "</table>";
					echo "</div>";
					echo "</div>";


  ?>
