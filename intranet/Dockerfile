FROM debian:latest
WORKDIR /app


RUN apt update -y &&\
 apt upgrade -y

RUN apt install apache2 php php-json php-intl php-xml \
php-mbstring php-imap libapache2-mod-php php-curl php-mysql wget unzip -y


RUN wget https://br.wordpress.org/latest-pt_BR.zip
RUN rm /var/www/html/index.html
RUN unzip latest-pt_BR.zip -d /var/www/html/
RUN mv /var/www/html/wordpress/* /var/www/html/
RUN rmdir /var/www/html/wordpress
COPY ./html/* /var/www/html
RUN chown -R www-data:www-data /var/www/html/ && \
chmod -R 755 /var/www/html/

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]