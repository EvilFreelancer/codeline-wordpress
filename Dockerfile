FROM wordpress
ADD ./wordpress/wp-config.php /var/www/html/
ADD ./wordpress/wordpress.dump /var/www/html/
