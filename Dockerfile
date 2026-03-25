FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite

RUN printf '<Directory /var/www/html>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' > /etc/apache2/conf-available/allowoverride.conf \
    && a2enconf allowoverride

WORKDIR /var/www/html
COPY . /var/www/html

RUN mkdir -p /var/www/html/views/festival/images \
    && chmod -R 777 /var/www/html/views/festival/images \
    && chown -R www-data:www-data /var/www/html