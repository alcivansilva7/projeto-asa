FROM ubuntu/bind9:latest

RUN apt-get update && apt-get upgrade -y
RUN apt-get install dnsutils -y

COPY ./bind/* /etc/bind/