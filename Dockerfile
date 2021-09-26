FROM wordpress:5.8.1
COPY org.whatwg.awesome /var/www/html/wp-content/themes/org.whatwg.awesome/

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

COPY wp-cache-config.php /var/www/html/wp-content/
RUN chmod a+rw /var/www/html/wp-content/wp-cache-config.php

COPY apache2-setup-wordpress.sh /usr/local/bin
RUN chmod +x /usr/local/bin/apache2-setup-wordpress.sh

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-setup-wordpress.sh"]
