#1 Set master image
FROM php:8.3.13-apache
# 2 Set working directory
WORKDIR /var/www/html
# 3 Add and enable Extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-enable pdo_mysql mysqli
# 4 Server settings
RUN echo "ServerName php-server1" >> /etc/apache2/apache2.conf
# 5 Install PHP Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# 6 Remove Cache
RUN rm -rf /var/cache/apt/*
# 7 Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www/html
# 8 Change current user to www
USER www-data
# 9 Export port 80
EXPOSE 80