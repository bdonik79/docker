#!/bin/bash
# docker network create laravel-net
# docker volume create laravel-vol1
docker run -d --name laraveldb --network laravel-net -p 3306:3306 laraveldb:latest
sleep 120
docker run -d --name laravelapp -v laravel-vol:/var/www/html --network laravel-net laravelapp:latest
sleep 30
docker run -d --name laravelweb -v laravel-vol:/var/www/html --network laravel-net -p 8989:80 laravelweb:latest


