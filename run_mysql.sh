#!/bin/bash

if [ -z $1 ] ||	[ -z $2 ]
then
	echo "Usage: run_mysql.sh : root_password, mysql_password"
else
	docker run --name mysql \
	    -p 3306:3306 \
	    -e MYSQL_ROOT_PASSWORD="root_password" \
	    -e MYSQL_DATABASE="paris-all-green" \
	    -e MYSQL_USER="tboitell" \
	    -e MYSQL_PASSWORD="dev_password" \
	    -d mysql:5.7
fi
