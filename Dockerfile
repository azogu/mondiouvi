# Utiliser une image PHP officielle
FROM php:8.1-apache

# Copier tous les fichiers de ton projet dans le répertoire web de l'image
COPY . /var/www/html/

# Donner les permissions nécessaires
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80 pour le serveur web
EXPOSE 80
