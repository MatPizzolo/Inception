FROM debian:buster

RUN apt-get update
RUN apt-get -y install php7.3 php-mysqli php-fpm wget sendmail

# Exponemos el puerto 9000, que se utiliza para la comunicación de PHP-FPM
EXPOSE 9000

# Copiamos el archivo de configuración www.conf para PHP-FPM a la ubicación correcta
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d

# Copiamos archivos y herramientas adicionales a la ubicación /var/www/
COPY ./tools /var/www/

# Cambiamos los permisos del script de inicio de WordPress para que sea ejecutable
RUN chmod +x /var/www/wordpress_start.sh

# Configuramos el punto de entrada (entrypoint) para ejecutar el script de inicio de WordPress
ENTRYPOINT ["/var/www/wordpress_start.sh"]

# Configuramos el comando para que inicie PHP-FPM en primer plano
CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
