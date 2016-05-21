#more master.sh
#!/bin/bash
./root/.bash_profile
master_Log_File=$(mysql -e "show slave status\G" | grep -w master_Log_File | awk -F":"'{print $2}')
Relay_master_Log_File=$(mysql -e "show slave status\G" | grep -w Relay_master_Log_File | awk -F":"'{print $2}')
Read_master_Log_Pos=$(mysql -e "show slave status\G" | grep -w Read_master_Log_Pos | awk -F":"'{print $2}')
Exec_master_Log_Pos=$(mysql -e "show slave status\G" | grep -w Exec_master_Log_Pos | awk -F":"'{print $2}')

i=1
while true
do 
if[$master_Log_File=$Relay_master_Log_File]&&[$Read_master_Log_Pos -eq $Exec_master_Log_Pos]
then
	echo 'ok'
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

mysql -e "stop slave;"
mysql -e "set global innodb_support_xa=1;"
mysql -e "set global sync_binlog=0;"
mysql -e "set global innodb_flush_log_at_trx_commit=2;"
mysql -e "set global event_scheduler=1;"
mysql -e "flush logs;GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%'IDENTIFIED BY'123456';flush privileges;"
mysql -e "show master status;" > /tmp/master_status_$(date "+%y%m%d-%H%M").txt 