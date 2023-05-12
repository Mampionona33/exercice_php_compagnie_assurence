# Utilisez une image basée sur php avec Apache
FROM php:8.1.17-apache-bullseye
 
# Installez les packages nécessaires
RUN apt update -y && apt install -y htop

# Install phpMyAdmin
ENV PHPMYADMIN_VERSION=5.1.1
RUN curl -L -o phpmyadmin.tar.gz https://files.phpmyadmin.net/phpMyAdmin/$PHPMYADMIN_VERSION/phpMyAdmin-$PHPMYADMIN_VERSION-all-languages.tar.gz \
    && tar -xzf phpmyadmin.tar.gz -C /var/www/html --strip-components=1 \
    && rm phpmyadmin.tar.gz

# Enable mod_rewrite
RUN a2enmod rewrite

# Install PDO
RUN docker-php-ext-install pdo_mysql

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
