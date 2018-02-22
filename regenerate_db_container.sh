#!/bin/bash
echo "Regenerating timesheets db container"
docker container stop mysql1
docker container rm mysql1
docker build -t ramdor/mysql docker/database
docker run --name mysql1 -v /var/docker_data/mysql/data/:/var/lib/mysql -d -p 3306:3306 -e MYSQL_ROOT_PWD=123 -e MYSQL_USER=dev -e MYSQL_USER_PWD=dev ramdor/mysql 