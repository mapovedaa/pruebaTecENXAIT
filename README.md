
## Acerca del proyecto

Este proyecto se realizo con el fin de presentar una prueba tecnica para INXAIT, en donde se pueden realizar sorteos con un numero mayor a 5 participantes.

- [SQL que se uso para realizar pruebas](https://github.com/mapovedaa/pruebaTecEnxait/blob/master/prueba_tecnica_inxait.sql).
- [modelo entidad relacion](https://github.com/mapovedaa/pruebaTecEnxait/blob/master/modeloer_prueba.jpg).

## Desarrollo del proyecto

Este poyecto se desarrollo en un entorno local, utilizando como entorno de desarrollo [Laragon](https://laragon.org/). Como motor de base de datos se uso [MySQL](https://www.mysql.com/) en su versión 5.7.24. Como servidor web se utilizo [NGINX](https://www.nginx.com/) en su versión 1.16.0. Se utilizo el framework [Laravel]() ne su version 4.0.0 con [PHP] en su version 7.2.19

## Utilizacion del proyecto

Para utilizar el proyecto se deben tener minimo 5 usuarios registrados.

- Para registrar los usuarios, se utilizar la ruta [/] o [/sorteo]
- Para realizar los sorteos, se debe utilizar la ruta [/admin] e ingresar con un usuario con role 18
- Las contraseñas de los usuarios son autogeneradas y son el mismo numero de cedula