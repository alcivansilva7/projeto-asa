FROM debian:latest
WORKDIR /app

RUN apt update -y &&\
 apt upgrade -y

RUN apt install apache2 php php-json php-intl php-xml \
php-mbstring php-imap libapache2-mod-php php-curl php-mysql wget tar gzip -y

RUN wget https://github.com/glpi-project/glpi/releases/download/10.0.9/glpi-10.0.9.tgz
RUN rm /var/www/html/index.html
RUN tar -xvzf glpi-10.0.9.tgz -C /var/www/html/

RUN chown -R www-data:www-data /var/www/html/ && \
chmod -R 755 /var/www/html/

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]