<?php
//$contents = file_get_contents('/u01/app/hbuser/admin/scripts/bin/purgeLogse2ew.sh');
$salida = shell_exec('sudo purgeLogse2ew.sh');
//shell_exec($contents);
echo "<pre>$salida</pre>";
?>
