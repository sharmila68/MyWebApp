#!/bin/bash
sudo apt-get update
sudo apt-get install -y php apache2
sudo apt-get install -y libapache2-mod-php
sudo apt-get install -y php-xml unzip
sudo apt-get install -y php-memcached
sudo apt-get install -y mysql-client
sudo apt-get install -y php-mysqli
sudo apachectl restart
