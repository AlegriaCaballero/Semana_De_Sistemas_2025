# Imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias para PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && rm -rf /var/lib/apt/lists/*

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Permitir uso de .htaccess en el directorio /var/www/html
RUN printf "<Directory /var/www/html>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n" > /etc/apache2/conf-available/z-override.conf \
    && a2enconf z-override

# Directorio de trabajo
WORKDIR /var/www/html

# Exponer puerto HTTP
EXPOSE 80
