aws ec2 describe-instances --region $1 --filters '[
 {"Name":"vpc-id","Values":["'$2'"]}
,{"Name":"instance-state-code","Values":["16"]}
,{"Name":"tag:e2ewNode","Values":["'$3'"]} 
 ]' 
 # aws ec2 describe-instances --region  us-east-2 --filters '[{"Name":"vpc-id","Values":["'vpc-0de8f9e751871bd50'"]},{"Name":"instance-state-code","Values":["16"]},{"Name":"tag:e2ewNode","Values":["InttegrioSecurity"]}]'
 ##'--query 'Reservations[*].Instances[*].[PublicIpAddress,PrivateIpAddress,PublicDnsName]'
