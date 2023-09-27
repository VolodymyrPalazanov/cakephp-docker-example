# Use a PHP 8.1 image as the base image
FROM php:8.1-apache

# Install Git
RUN apt-get update && apt-get install -y git

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your application files into the container
COPY . /var/www/html