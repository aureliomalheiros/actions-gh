FROM wordpress:6.0.0

ARG IP_DB \
    USER_DB \
    PASSWORD_DB \
    NAME_DB \
    TABLE_DB

ENV WORDPRESS_DB_HOST=${IP_DB} \
    WORDPRESS_DB_USER=${USER_DB} \
    WORDPRESS_DB_PASSWORD=${PASSWORD_DB} \
    WORDPRESS_DB_NAME=${NAME_DB} \
    WORDPRESS_TABLE_PREFIX=${TABLE_DB}


COPY plugins/* ./wp-content/plugins/
COPY themes/ /var/www/html/wp-content/themes