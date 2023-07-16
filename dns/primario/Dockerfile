FROM ubuntu/bind9:latest

RUN apt-get update && apt-get upgrade -y
RUN apt-get install dnsutils -

COPY named.conf /etc/bind/named.conf
COPY named.conf.local /etc/bind/named.conf.local
COPY db.ce.br /etc/bind/db.ce.br
COPY rv.db.ce.br /etc/bind/rv.db.ce.br