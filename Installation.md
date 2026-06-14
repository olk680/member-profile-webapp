# Installation Guide

## Requirements
- Apache
- PHP
- MariaDB

## Steps

1. Install packages:
sudo apt install apache2 php mariadb-server php-mysql

2. Start services:
sudo systemctl start apache2
sudo systemctl start mariadb

3. Create database:

CREATE DATABASE memberdb;

4. Place files in:
 /var/www/html/member-profile-webapp

5. Open in browser:
 http://<your-pi-ip>/member-profile-webapp/

