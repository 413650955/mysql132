#more stop.sh
#!/bin/bash
./root/.bash_profile
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'IDENTIFIED BY'1q2w3e4r';flush privileges;"
mysql -e "set global innodb_support_xa=1;"
mysql -e "set global sync_binlog=1;"
mysql -e "set global innodb_flush_log_at_trx_commit=1;"
M_File1=$(mysql -e "show master status\G" | awk -F':''/File/{print $2}')
M_Position1=$(mysql -e "show master status\G" | awk -F':''/Position/{print $2}')
sleep 1
M_File2=$(mysql -e "show master status\G" | awk -F':''/File/{print $2}')
M_Position2=$(mysql -e "show master status\G" | awk -F':''/Position/{print $2}')

i=1
while true
do
if[$M_File1=$M_File2] && [$M_Position1 -eq $M_Position2]
then
	echo "ok"
	break
else
	sleep 1
	if[$i -gt 60]
	then 
		break
	fi 
	continue
	let i++
fi
done