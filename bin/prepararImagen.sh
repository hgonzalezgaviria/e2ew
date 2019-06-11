#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Preparar imagen ec2 para inicio
pathPass="/u01/app/hbuser/product/glassfish4/glassfish/config/inittask.txt"
pathGlassfish="/u01/app/hbuser/product/glassfish4/glassfish/bin/asadmin"
pathGlassfishdomain="/u01/app/hbuser/product/glassfish4/glassfish/domains/domain1/config/domain.xml"


if [ -z "$1" ]
then
echo "No recibio un parametro: 1:Services 2:Web 3:Security 4:Id"
elif [ "$1" == 1 ]
then
echo Imagen Services
sudo systemctl disable glassfish.service
sudo chkconfig activemq off
source /etc/environment
$pathGlassfish --port 4848 --host localhost  --user=admin --interactive=false  --passwordfile $pathPass  delete-password-alias dbpass
stopGlassfishSever
cleanLogsAppE2ew
cleanCacheGlassfish
stopGlassfishSever
sudo service activemq stop
cache=`cat $pathGlassfishdomain | grep 'enabled="false"'`
	if [ -z "$cache" ]
	then
	sed -i 's/virtual-servers="server"/virtual-servers="server" enabled="false"/g' $pathGlassfishdomain
	else
	echo "OJO! Las aplicaciones ya estan disable"
	fi

sed -i '/-De2ewsecurity.db.url/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.userbmi/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.usere2f/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.useremr/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.userspi/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.usereic/d' $pathGlassfishdomain
true > /etc/environment
sudo sed -i '/AS_URL_ELB/d' /etc/httpd/conf.d/environment.conf
sudo /usr/sbin/apachectl restart
cd ~/html/ && git pull
echo Imagen OK
elif [ "$1" == 2 ]
then
echo Imagen Web
sudo systemctl disable glassfish.service
source /etc/environment
$pathGlassfish --port 4848 --host localhost  --user=admin --interactive=false  --passwordfile $pathPass  delete-password-alias dbpass
stopGlassfishSever
cleanLogsAppE2ew
cleanCacheGlassfish
stopGlassfishSever
cache=`cat $pathGlassfishdomain | grep 'enabled="false"'`
	if [ -z "$cache" ]
	then
	sed -i 's/virtual-servers="server"/virtual-servers="server" enabled="false"/g' $pathGlassfishdomain
	else
	echo "OJO! Las aplicaciones ya estan disable"
	fi

sed -i '/-De2ewsecurity.db.url/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.userspi/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.usereic/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.usere2f/d' $pathGlassfishdomain
true > /etc/environment
sudo sed -i '/AS_URL_ELB/d' /etc/httpd/conf.d/environment.conf
sudo /usr/sbin/apachectl restart
cd ~/html/ && git pull
echo Imagen OK
elif [ "$1" == 3 ]
then
echo Imagen Security
sudo systemctl disable glassfish.service
source /etc/environment
$pathGlassfish --port 4848 --host localhost  --user=admin --interactive=false  --passwordfile $pathPass  delete-password-alias dbpass
stopGlassfishSever
cleanLogsAppE2ew
cleanCacheGlassfish
stopGlassfishSever
cache=`cat $pathGlassfishdomain | grep 'enabled="false"'`
	if [ -z "$cache" ]
	then
	sed -i 's/virtual-servers="server"/virtual-servers="server" enabled="false"/g' $pathGlassfishdomain
	else
	echo "OJO! Las aplicaciones ya estan disable"
	fi

sed -i '/-De2ewsecurity.db.url/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.useremr/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.userspi/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.usereic/d' $pathGlassfishdomain
true > /etc/environment
sudo sed -i '/AS_URL_ELB/d' /etc/httpd/conf.d/environment.conf
sudo /usr/sbin/apachectl restart
cd ~/html/ && git pull
echo Imagen OK
elif [ "$1" == 4 ]
then
echo Imagen ID
sudo systemctl disable glassfish.service
source /etc/environment
$pathGlassfish --port 4848 --host localhost  --user=admin --interactive=false  --passwordfile $pathPass  delete-password-alias dbpass
stopGlassfishSever
cleanLogsAppE2ew
cleanCacheGlassfish
stopGlassfishSever
cache=`cat $pathGlassfishdomain | grep 'enabled="false"'`
	if [ -z "$cache" ]
	then
	sed -i 's/virtual-servers="server"/virtual-servers="server" enabled="false"/g' $pathGlassfishdomain
	else
	echo "OJO! Las aplicaciones ya estan disable"
	fi

sed -i '/-De2ewsecurity.db.url/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.userspi/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.usereic/d' $pathGlassfishdomain
sed -i '/-De2ewsecurity.db.usere2f/d' $pathGlassfishdomain
sed -i '/-De2ew.emr.url/d' $pathGlassfishdomain
sed -i '/-De2ew.emr.port/d' $pathGlassfishdomain
true > /etc/environment
sudo sed -i '/AS_URL_ELB/d' /etc/httpd/conf.d/environment.conf
sudo /usr/sbin/apachectl restart
cd ~/html/ && git pull
echo Imagen OK
else
 echo "Debe enviar un parametro valido"
fi



















