FROM wordpress:6.0.0

ENV WORDPRESS_DB_HOST=10.58.240.2 \
    WORDPRESS_DB_USER=wp-user \
    WORDPRESS_DB_PASSWORD='O&I[-X/byz{)hkng' \
    WORDPRESS_DB_NAME=wordpress \
    WORDPRESS_TABLE_PREFIX=wp_


COPY plugins/* ./wp-content/plugins/
COPY themes/ /var/www/html/wp-content/themes