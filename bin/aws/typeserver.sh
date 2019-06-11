aws ec2 describe-instances --region $1 --output text --filters '[
 {"Name":"instance-state-code","Values":["16"]}
,{"Name":"ip-address","Values":["'$2'"]}
,{"Name":"tag-key","Values":["e2ewNode"]}
 ]' --query 'Reservations[*].Instances[*].[Tags[?Key==`e2ewNode`].Value]'