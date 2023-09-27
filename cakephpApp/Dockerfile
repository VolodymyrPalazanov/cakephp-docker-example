# Use a PHP 8.1 image with Apache as the base image
FROM php:8.1-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql intl zip

# Enable Apache modules
RUN a2enmod rewrite

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your CakePHP application files into the container
COPY . /app

# Expose port 80 for Apache
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
