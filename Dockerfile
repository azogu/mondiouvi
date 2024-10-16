# Utiliser une image PHP officielle
FROM php:8.1-apache

# Installer les extensions PHP nécessaires (comme pdo_mysql pour MySQL)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copier tous les fichiers de ton projet dans le répertoire web de l'image
COPY . /var/www/html/
