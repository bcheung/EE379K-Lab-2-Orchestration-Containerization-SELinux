#!/bin/bash

chown -R mysql:mysql /var/lib/mysql /var/run/mysqld

echo '[+] Starting mysql...'
service mysql start && /bin/bash

while true
do
    tail -f /var/log/mysql/*.log
    exit 0
done
