FROM mysql:latest

RUN mysql -uroot -proot -e "CREATE DATABASE wordpress;"
RUN mysql -uroot -proot -e "CREATE USER 'wordpress'@'localhost' IDENTIFIED BY 'wordpress';"
RUN mysql -uroot -proot -e "GRANT ALL PRIVILEGES ON * . * TO 'wordpress'@'localhost';"
RUN mysql -uroot -proot -e "FLUSH PRIVILEGES;"
RUN mysql -uroot -proot -e "CREATE DATABASE intranet;"
RUN mysql -uroot -proot -e "CREATE USER 'intranet'@'localhost' IDENTIFIED BY 'intranet';"
RUN mysql -uroot -proot -e "GRANT ALL PRIVILEGES ON * . * TO 'intranet'@'localhost';"
RUN mysql -uroot -proot -e "FLUSH PRIVILEGES;"