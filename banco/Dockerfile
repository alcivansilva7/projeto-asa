FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=wordpress
ENV MYSQL_USER=wordpress
ENV MYSQL_PASSWORD=wordpress

COPY iniciar.sh /docker-entrypoint-initdb.d
RUN chmod 755 /docker-entrypoint-initdb.d/iniciar.sh