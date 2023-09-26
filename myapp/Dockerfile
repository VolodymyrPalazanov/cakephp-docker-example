# Use a PHP 8.1 image as the base image
FROM php:8.1-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your application files into the container
COPY . /var/www/html

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Run Composer to install dependencies
RUN composer install

# Additional setup or configuration steps if needed
