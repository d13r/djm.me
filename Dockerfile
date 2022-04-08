# I could use 'httpd', but I already have the PHP image downloaded
FROM php:8.1-apache

# Enable Apache modules
RUN a2enmod \
    rewrite

# Copy the files
COPY ./www /var/www/html
