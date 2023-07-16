FROM ubuntu/bind9:latest

RUN apt-get update && apt-get upgrade -y
RUN apt-get install dnsutils -y

COPY named.conf /etc/bind/named.conf
COPY named.conf.local /etc/bind/named.conf.local
COPY db.asa.br /etc/bind/db.asa.br
COPY rv.db.asa.br /etc/bind/rv.db.asa.br