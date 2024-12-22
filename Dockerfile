FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# COPY ./db/database.sql /docker-entrypoint-initdb.d/

# # Command to start Apache server
# CMD ["apache2-foreground"]