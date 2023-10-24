FROM debian:buster

RUN apt-get update
RUN apt-get install -y mariadb-server

# Exponemos el puerto 3306
EXPOSE 3306

# Copiamos el archivo de configuración personalizado 50-server.cnf a la ubicación correcta
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

# Copiamos archivos y herramientas adicionales a la ubicación /var/www/
COPY ./tools /var/www/

# Iniciamos el servicio MariaDB y luego importamos una base de datos inicial desde un archivo SQL
RUN service mysql start && mysql < /var/www/initial_db.sql && rm -f /var/www/initial_db.sql;

# Configuramos el comando para que el contenedor ejecute el servidor MariaDB
CMD ["mysqld"]
