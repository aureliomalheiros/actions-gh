FROM wordpress:6.0.0

ARG WP_HOST \
    DB_USER \
    WP_PASSWORD \
    DB_NAME \
    WP_PREFIX

ENV WORDPRESS_DB_HOST=$IP_DB \
    WORDPRESS_DB_USER=$USER_DB \
    WORDPRESS_DB_PASSWORD=$PASSWORD_DB \
    WORDPRESS_DB_NAME=$NAME_DB \
    WORDPRESS_TABLE_PREFIX=$TABLE_DB


COPY plugins/* ./wp-content/plugins/
COPY themes/ /var/www/html/wp-content/themes