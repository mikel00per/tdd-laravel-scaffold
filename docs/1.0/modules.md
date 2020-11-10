
El módulo intenta describir los módulos principales de cualquier proyecto pequeño que suele tener los siguientes apartados:

1. **Web**:  Página landing del producto, pude ser información de una empresa así como también de contacto personal, etc. Está construido únicamente con controladores y las rutas están inyectadas a través del fichero, sin embargo es mejor opción hacerlo usando el RouterProvider_ extendiendo de donde se lee las rutas ajustando también así el middleware si se desea, para más información ver el fichero: Core/Providers/RouteServiceProvider.

2. **Admin**: Página de administración, tendrá opciones típicas de un crud pero siguiendo el patron repositorio. El paquete heredado proviene del autor del paquete Laracon. Lo que hacemos es desplazar la lógica de negocio a métodos cercanos al **lenguaje oblicuo** del problema. Las rutas a diferencia de Web están importadas a través de un _RouterProvider_ el beneficio de esto es que le podemos indicar el fichero directamente e importarlo usando herencia, es decir que podemos heredar actualizaciones. 

3. **Api**: 
