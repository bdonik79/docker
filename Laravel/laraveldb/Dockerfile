FROM mysql:latest
ENV MYSQL_ROOT_PASSWORD=123456@Bd \
TZ=Asia/Dhaka \
MYSQL_DATABASE=laraveldb \
MYSQL_USER=laravel \
MYSQL_PASSWORD=654321@@Bd
RUN rm -rf /etc/mysql/my.cnf
ADD my.cnf /etc/mysql
EXPOSE 3306
CMD ["mysqld"]
