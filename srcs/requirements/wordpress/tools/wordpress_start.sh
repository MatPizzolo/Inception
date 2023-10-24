#!/bin/bash

# Cambia la configuración de PHP-FPM para escuchar en el puerto 9000 en lugar del socket
sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf";

# Cambia la propiedad de los archivos en /var/www/ a www-data
chown -R www-data:www-data /var/www/*;

# Establece permisos en /var/www/ para que los archivos sean legibles y ejecutables por todos
chown -R 755 /var/www/*;

# Crea el directorio /run/php/ y el archivo de identificación de PHP-FPM
mkdir -p /run/php/;
touch /run/php/php7.3-fpm.pid;

# Verifica si el archivo wp-config.php ya existe; si no, realiza la configuración inicial de WordPress
if [ ! -f /var/www/html/wp-config.php ]; then
    echo "Wordpress: setting up..."
    mkdir -p /var/www/html

    # Descarga e instala WP-CLI (Herramienta de línea de comandos de WordPress)
    wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar;
    chmod +x wp-cli.phar; 
    mv wp-cli.phar /usr/local/bin/wp;

    cd /var/www/html;

    # Descarga y configura WordPress
    wp core download --allow-root;
    mv /var/www/wp-config.php /var/www/html/

    # Crea usuarios de WordPress
    echo "Wordpress: creating users..."
    wp core install --allow-root --url=${DOMAIN_URL} --title=${MYSQL_DATABASE} --admin_user=${WP_ADMIN_LOGIN} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=${WP_ADMIN_EMAIL}
    wp user create --allow-root ${MYSQL_USER} ${MYSQL_EMAIL} --user_pass=${MYSQL_PASSWORD};

    echo "Wordpress: set up!"
fi

# Ejecuta el comando proporcionado al script como argumento
exec "$@"
