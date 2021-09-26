wp() {
  /usr/local/bin/wp "$@" --allow-root --path=/var/www/html
}

wp config set WPCACHEHOME /var/www/html/wp-content/plugins/wp-super-cache/
wp config set WP_CACHE true --raw

wp plugin install wp-super-cache --force --activate

wp package install wp-cli/wp-super-cache-cli
wp super-cache enable

apache2-foreground
