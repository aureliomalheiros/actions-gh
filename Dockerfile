FROM wordpress:6.0.0

ARG WP_HOST \
    DB_USER \
    WP_PASSWORD \
    DB_NAME \
    WP_PREFIX

ENV WORDPRESS_DB_HOST=${WP_HOST} \
    WORDPRESS_DB_USER=${DB_USER} \
    WORDPRESS_DB_PASSWORD=${WP_PASSWORD} \
    WORDPRESS_DB_NAME=${DB_NAME} \
    WORDPRESS_TABLE_PREFIX=${WP_PREFIX}


COPY plugins/* ./wp-content/plugins/
COPY themes/ /var/www/html/wp-content/themes