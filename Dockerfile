FROM php:8.2-apache

# Install dependencies if needed
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite
RUN a2enmod rewrite

# Use the production configuration for PHP to hide warnings and errors
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy the entire project directory to the container
COPY . /var/www/html/

# Set Apache DocumentRoot to the site-template directory
RUN sed -i 's|/var/www/html|/var/www/html/site-template|g' /etc/apache2/sites-available/000-default.conf

# Ensure proper permissions
RUN chown -R www-data:www-data /var/www/html/
