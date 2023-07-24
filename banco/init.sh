#!/bin/bash

mysql -uroot -proot -e "CREATE USER 'admin'@'%' IDENTIFIED BY 'admin';"
mysql -uroot -proot -e "GRANT ALL PRIVILEGES ON * . * TO 'admin'@'%';"
mysql -uroot -proot -e "FLUSH PRIVILEGES;"
mysql -uintranet -pintranet -e "CREATE DATABASE glpi;"
mysql -uintranet -pintranet -e "CREATE DATABASE nextcloud;"