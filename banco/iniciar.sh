#!/bin/bash

mysql -uroot -proot -e "CREATE USER 'intranet'@'localhost' IDENTIFIED BY 'intranet';"
mysql -uroot -proot -e "GRANT ALL PRIVILEGES ON * . * TO 'intranet'@'localhost';"
mysql -uroot -proot -e "FLUSH PRIVILEGES;"
mysql -uintranet -pintranet -e "CREATE DATABASE intranet;"
mysql -uintranet -pintranet -e "CREATE DATABASE nextcloud;"