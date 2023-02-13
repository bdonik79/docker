#!/bin/sh
docker network create magento-net 
docker volume create magento-vol
docker build -t magentodb:latest magentodb
docker build -t magentoelasticsearch:latest magentoelastic
docker build -t magentoapp:latest magentoapp
docker build -t magentoweb:latest magentoweb
docker run -d --name magentodb --network magento-net -p 3306:3306 magentodb:latest
docker run -d --name magentoelasticsearch --network magento-net magentoelasticsearch:latest
docker run -d --name magentoapp -v magento-vol:/var/www/html --network magento-net magentoapp:latest
docker run -d --name magentoweb -v magento-vol:/var/www/html --network magento-net -p 8989:8989 magentoweb:latest


docker system prune --all