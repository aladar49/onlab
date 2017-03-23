#!/bin/bash

docker run -it --link my_db:mysql --rm mysql sh -c 'exec mysql -h "<mysql_container_ID>" -p "3306" -uroot -p "root"'






