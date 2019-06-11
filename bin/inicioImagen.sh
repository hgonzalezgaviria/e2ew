#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Inicio de Imagen ec2

if [ -z "$1" ]
then
echo "No recibio un parametro: 1:Services 2:Web 3:Security 4:Id"
elif [ "$1" == 1 ]
then
sudo yum update -y
echo "export E2EWSECURITY_DB_URL=\"jdbc\:oracle\:thin\:@oracle.inttegrio-aws.com\:1521\:smart\"" > /etc/environment
echo "export E2EWSECURITY_DB_USEREIC=\"EICDATOS\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USEREMR=\"EMR\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USERSPI=\"SPIDER\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USERBMI=\"BMI\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USERE2F=\"E2FDATOS\"" >> /etc/environment
echo "export AS_ADMIN_ALIASPASSWORD=\"CVHwKd8aUX\"" >> /etc/environment
echo "export AS_URL_ELB=\"http://e2ew.inttegrio-aws.com\"" >> /etc/environment
glassfishServer startservices
elif [ "$1" == 2 ]
then
sudo yum update -y
echo "export E2EWSECURITY_DB_URL=\"jdbc\:oracle\:thin\:@oracle.inttegrio-aws.com\:1521\:smart\"" > /etc/environment
echo "export E2EWSECURITY_DB_USEREIC=\"EICDATOS\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USERSPI=\"SPIDER\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USERE2F=\"E2FDATOS\"" >> /etc/environment
echo "export AS_ADMIN_ALIASPASSWORD=\"CVHwKd8aUX\"" >> /etc/environment
echo "export AS_URL_ELB=\"http://e2ew.inttegrio-aws.com\"" >> /etc/environment
glassfishServer startweb
elif [ "$1" == 3 ]
then
sudo yum update -y
echo "export E2EWSECURITY_DB_URL=\"jdbc\:oracle\:thin\:@oracle.inttegrio-aws.com\:1521\:smart\"" > /etc/environment
echo "export E2EWSECURITY_DB_USEREIC=\"EICDATOS\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USEREMR=\"EMR\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USERSPI=\"SPIDER\"" >> /etc/environment
echo "export AS_ADMIN_ALIASPASSWORD=\"CVHwKd8aUX\"" >> /etc/environment
echo "export AS_URL_ELB=\"http://e2ew.inttegrio-aws.com\"" >> /etc/environment
glassfishServer startscurity
elif [ "$1" == 4 ]
then
sudo yum update -y
echo "export E2EWSECURITY_DB_URL=\"jdbc\:oracle\:thin\:@oracle.inttegrio-aws.com\:1521\:smart\"" > /etc/environment
echo "export E2EWSECURITY_DB_USEREIC=\"EICDATOS\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USERSPI=\"SPIDER\"" >> /etc/environment
echo "export E2EWSECURITY_DB_USERE2F=\"E2FDATOS\"" >> /etc/environment
echo "export AS_ADMIN_ALIASPASSWORD=\"CVHwKd8aUX\"" >> /etc/environment
echo "export AS_URL_ELB=\"http://e2ew.inttegrio-aws.com\"" >> /etc/environment
echo "export AS_URL_EMR=\"e2ewemr.inttegrio-aws.com\"" >> /etc/environment
echo "export AS_PORT_EMR=\"8000\"" >> /etc/environment
glassfishServer startid
else
 echo "Debe enviar un parametro valido"
fi



