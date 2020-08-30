FROM php:7.2.6-apache
# RUN chown -R 5050:5050 /home/kai/pgadmin_data
RUN apt update
RUN apt install -y libpq-dev 
RUN docker-php-ext-install mysqli
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pgsql