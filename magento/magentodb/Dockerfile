FROM mysql:debian
RUN apt-get -y update && apt-get -y upgrade && apt-get -y install vim net-tools
ENV MYSQL_ROOT_PASSWORD=123456@Bd \
TZ=Asia/Dhaka \
MYSQL_DATABASE=magentodb \
MYSQL_USER=magento \
MYSQL_PASSWORD=654321@Bd
RUN rm -rf /etc/mysql/my.cnf
ADD my.cnf /etc/mysql
#ADD m2d_metro.sql /docker-entrypoint-initdb.d
EXPOSE 3306
CMD ["mysqld"]
