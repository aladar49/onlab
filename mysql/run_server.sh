#!/bin/bash

docker run -d --name my_db \
		-v /tmp/workdir/mysql/world_db:/var/lib/mysql \
		-e MYSQL_ROOT_PASSWORD=root \
		-e DB_USER=user \
                -e DB_PASSWORD=user \
                -e DB_DBNAME=world \
		-e SERVICE_NAME=web \
		mysql		
