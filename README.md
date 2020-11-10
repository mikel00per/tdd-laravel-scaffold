<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Project l00per 

Un scaffold para construir otras aplicaciones que contiene una web de producto, contacto, terminos de uso, un backoffice para hacer tareas de administración en este caso las solicitudes de contacto y otras tareas del panel de administración y por último una api ficticia (el backoffice puede que sea una api para vue)

## Explicación cambio de directorios.

Como se puede ver el directorio app ha sido renombrado a core y  todas las carpetas que laravel necesita. De cada uno de ellos he creado un BaseLOQUESEA para poder extender entre los diferentes módulos las cosas que necesitamos. Los directorios contienen:



Además hemos creado un namespace para los Módulos a la altura de la raiz para discernir a que nos referimos: web, api, backoffice 
