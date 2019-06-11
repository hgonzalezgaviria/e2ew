aws ec2 describe-instances --region $1 --filters '[
{"Name":"instance-state-code","Values":["16"]}
,{"Name":"vpc-id","Values":["'$2'"]}
,{"Name":"tag:e2ewNode","Values":["'$3'"]} 
]'