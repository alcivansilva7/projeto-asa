FROM debian:latest


RUN apt update -y &&\
 apt upgrade -y

RUN apt install apache2 php php-json php-intl php-xml \
php-mbstring php-imap libapache2-mod-php php-curl php-mysql nano -y

COPY ./config/* /etc/apache2/sites-available/
RUN a2enmod proxy proxy_connect proxy_html proxy_http
RUN a2ensite portal.asa.br.conf intranet.asa.br.conf webmail.asa.br.conf


EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]