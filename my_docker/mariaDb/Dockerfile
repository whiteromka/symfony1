FROM mariadb:latest

ENV MYSQL_ROOT_PASSWORD=my-secret-pw
ENV MYSQL_DATABASE=mydatabase
ENV MYSQL_USER=myuser
ENV MYSQL_PASSWORD=mypassword

COPY init.sql /docker-entrypoint-initdb.d/

EXPOSE 3306