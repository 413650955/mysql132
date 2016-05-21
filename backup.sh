#more backup.sh
#!/bin/bash
./root/.bash_profile
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' IDENTIFIED BY '1q2w3e4r';flush privileges;"
mysql -e "set global event_scheduler=0;"
mysql -e "set global innodb_support_xa=1;"
mysql -e "set global sync_binlog=0;"
mysql -e "set global innodb_flush_log_at_trx=commit=2;"
