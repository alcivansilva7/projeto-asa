FROM mysql:latest

COPY init.sh /docker-entrypoint-initdb.d
RUN chmod 755 /docker-entrypoint-initdb.d/init.sh