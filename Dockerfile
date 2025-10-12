# Usamos la imagen base de PHP con Apache
FROM php:8.2-apache

# Instalamos extensiones necesarias para MySQL y desarrollo web
RUN docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli pdo_mysql

# Habilitamos mod_rewrite y autoindex de Apache
RUN a2enmod rewrite autoindex

# Opcional: copiamos un archivo de configuración de Apache si necesitás
# COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Establecemos el directorio de trabajo
WORKDIR /var/www/html
