#!/bin/bash
mkdir /u01/app/hbuser/product//glassfish4/glassfish/domains/domain1/applications/E1F/QR
sudo sed -i '/uci.repository.path/d' /u01/app/hbuser/product/glassfish4/glassfish/domains/domain1/applications/E1F/WEB-INF/classes/uciclient.properties
echo "uci.repository.path         =/u01/app/hbuser/product/e2ew/uciclient" >> /u01/app/hbuser/product/glassfish4/glassfish/domains/domain1/applications/E1F/WEB-INF/classes/uciclient.properties
