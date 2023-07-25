CREATE USER IF NOT EXISTS intranet@'%' IDENTIFIED BY 'intranet';
SET PASSWORD FOR intranet@'%' = PASSWORD('intranet');

CREATE USER IF NOT EXISTS nextcloud@'%' IDENTIFIED BY 'nextcloud';
SET PASSWORD FOR nextcloud@'%' = PASSWORD('nextcloud');

CREATE USER IF NOT EXISTS glpi@'%' IDENTIFIED BY 'glpi';
SET PASSWORD FOR glpi@'%' = PASSWORD('glpi');

CREATE DATABASE IF NOT EXISTS intranet;
GRANT ALL ON intranet.* TO intranet@'%'

CREATE DATABASE IF NOT EXISTS inextcloud;
GRANT ALL ON nextcloud.* TO nextcloud@'%'

CREATE DATABASE IF NOT EXISTS glpi;
GRANT ALL ON glpi.* TO glpi@'%'