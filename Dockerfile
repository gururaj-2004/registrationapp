# Use official PHP + Apache image
FROM php:8.2-apache

# Copy all project files into the container
COPY . /var/www/html/

# Expose port 80 to access from browser
EXPOSE 80
