#!/bin/bash
echo "Regenerating timesheets web container"
#docker container start mysql1
docker container stop t1
docker container rm t1
docker rmi ramdor/timesheets
docker build -t ramdor/timesheets docker/webserver
#docker run -d -p 80:80 -v /home/rene/Documents/code/microservices/timesheets:/var/www/html --name t1 --link mysql1 ramdor/timesheets
docker run -d -p 80:80 -v /home/rene/Documents/code/microservices/timesheets:/var/www/html --name t1 ramdor/timesheets
docker exec t1 chown -R www-data:1000 /var/www/html
docker exec t1 chmod -R 0775 /var/www/html
#docker container start mysql1
echo "done"
