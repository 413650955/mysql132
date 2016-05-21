#!/bin/bash

user=root
passwd=jsj2013
port=3306
MySQLpath=/usr/bin

for hostip in 'cat slaveip.txt'
do
	result=$($MySQLpath/mysql -u$user -p$passwd -h$hostip -P$port -e "show slave status\G" | awk -F":"'/slave_SQL_Running/{$print $2}')

	if["#result"!="Yes"];then
		$MySQLpath/mysql -u$user -p$passwd -h$hostip -P$port -e "set global slave_exec_mode='IDEMPOTENT';"
		$MySQLpath/mysql -u$user -p$passwd -h$hostip -P$port -e "stop slave;"
		$MySQLpath/mysql -u$user -p$passwd -h$hostip -P$port -e "start slave;"
		echo "replication is error and skip" | mail -s "replcation Alert" iblis_lsy@163.com
	fi
done	              