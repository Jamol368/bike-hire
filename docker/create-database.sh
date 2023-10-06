#!/usr/bin/env bash

mysql --user=admin --password="${DB_PASSWORD}" <<-EOSQL
    CREATE DATABASE IF NOT EXISTS laravel;
    GRANT ALL PRIVILEGES ON \`laravel%\`.* TO '$MYSQL_USER'@'%';
EOSQL
