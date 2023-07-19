FROM mysql:latest

COPY iniciar.sh /docker-entrypoint-initdb.d
RUN chmod 755 /docker-entrypoint-initdb.d/iniciar.sh