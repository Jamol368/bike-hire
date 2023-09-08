#!/usr/bin/env bash

mysql --user=admin --password="${DB_PASSWORD}" <<-EOSQL
    CREATE DATABASE IF NOT EXISTS bike_hire;
    GRANT ALL PRIVILEGES ON \`bike_hire%\`.* TO '$MYSQL_USER'@'%';
EOSQL
