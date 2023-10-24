FROM debian:buster

RUN apt-get update
RUN apt-get install -y nginx openssl

# Creamos un directorio para almacenar los certificados SSL
RUN mkdir /etc/nginx/ssl

# Generamos un certificado autofirmado para SSL usando OpenSSL
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
       -out /etc/nginx/ssl/mpizzolo.crt \
       -keyout /etc/nginx/ssl/mpizzolo.key \
       -subj "/C=SP/ST=Madrid/L=Madrid/O=42 School/OU=mpizzolo/CN=mpizzolo/"

# Copiamos el archivo de configuración de Nginx desde la ubicación local al contenedor
COPY ./conf/nginx.conf /etc/nginx/conf.d

# Creamos un directorio para almacenar los archivos de socket de Nginx
RUN mkdir -p /run/nginx

# Exponemos el puerto 443 para las conexiones HTTPS
EXPOSE 443

# Iniciamos Nginx en el primer plano para que el contenedor no se detenga inmediatamente
CMD ["nginx", "-g", "daemon off;"]
