aws ec2 describe-instances --region $1 --output text --filters '[
 {"Name":"instance-state-code","Values":["16"]}
,{"Name":"ip-address","Values":["'$2'"]}
,{"Name":"tag:e2ewNode","Values":["'$3'"]} 
 ]' --query 'Reservations[*].Instances[*].[VpcId]'