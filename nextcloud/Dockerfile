FROM debian:latest
WORKDIR /app


RUN apt update -y &&\
 apt upgrade -y
RUN apt install apache2 php-zip php-gd php-curl php-mbstring php-mysql php-pgsql php-dom php-xmlreader php-intl php-xmlwriter unzip wget -y

RUN rm /var/www/html/index.html
RUN wget https://download.nextcloud.com/server/releases/latest-9.zip
RUN unzip latest-9.zip -d /var/www/html/
RUN mv /var/www/html/nextcloud/* /var/www/html/
#RUN rmdir -f /var/www/html/nextcloud
RUN chown -R www-data:www-data /var/www/html/ && \
chmod -R 755 /var/www/html/


EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]