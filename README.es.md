# `Inception`

Un Sistema Modular Dockerizado gestionado por Docker-Compose, que abarca una configuración sólida de la pila LEMP (Nginx, MariaDB, PHP) para implementar eficientemente WordPress. La configuración sigue pautas específicas, ofreciendo un enfoque práctico para la administración del sistema a través del uso de Docker.

[Tema](img/es.subject.pdf)


<p align="center">
    <img src="img/docker.svg" height="70">
    <img src="img/mariadb.svg" height="70">
    <img src="img/wordpress.svg" height="70">
    <img src="img/nginx.svg" height="70">
</p>

<p align="center">
    <img src="img/basic.png">
</p>
## Componentes del Proyecto:
- **Contenedor NGINX con Soporte TLS:**
  - Contenedor Docker configurado exclusivamente para admitir TLSv1.2 o TLSv1.3.

- **Contenedores de WordPress y MariaDB:**
  - Contenedores Docker separados para WordPress con php-fpm y MariaDB, excluyendo Nginx.

- **Configuración de Volumen:**
  - Asignación de volúmenes para la base de datos de WordPress y los archivos del sitio web.

- **Redes:**
  - Establecimiento de una red Docker dedicada que facilita la comunicación entre contenedores.

- **Mecanismo de Reinicio Automático:**
  - Reinicios automáticos de contenedores en caso de un fallo para mantener la operatividad del sistema.

- **Configuración de Usuario de la Base de Datos:**
  - Creación de dos usuarios en la base de datos de WordPress, con criterios estrictos para el nombre de usuario del administrador.

- **Asignación de Volumen a la Máquina Anfitriona:**
  - Volúmenes asignados al directorio `/home/login/data` en la máquina anfitriona para un acceso sin problemas.

- **Configuración de Dominio:**
  - Configuración personalizada de dominio (`login.42.fr`) direccionado a la dirección IP local para mejorar la accesibilidad.
---

