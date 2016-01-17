# learningLaravel

This project is created to go step by step understanding the basic operation of laravel.

1. Definir la estructura de directorios
   + src/
   + tests/

2. Inicializar el proyecto con composer para crear composer.json
   $ php composer.phar init
   $ cd learningLaravel
   $ php composer.phar init
     Welcome to the Composer config generator
     This command will guide you through creating your composer.json config.
     Package name (<vendor>/<name>) [Asus/learning-laravel]: alexmbello1984/learning-laravel
     Description []: This project is created to go step by step understanding the basic operation of laravel
     Author [alexmbello <alexmbello@gmail.com>]: alexmbello <alexmbello1984@gmail.com>
     Minimum Stability []: stable
     Package Type []: project
     License []: MIT

     Define your dependencies.
     Would you like to define your dependencies (require) interactively [yes]? no
     Would you like to define your dev dependencies (require-dev) interactively [yes]? no

     {
         "name": "alexmbello1984/learning-laravel",
         "description": "This project is created to go step by step understanding the basic operation of laravel",
         "type": "project",
         "license": "MIT",
         "authors": [
            {
                "name": "alexmbello",
                "email": "alexmbello1984@gmail.com"
            }
         ],
         "minimum- ": "stable",
         "require": {}
     }

     Do you confirm generation [yes]? yes
     Would you like the vendor directory added to your .gitignore [yes]? no
3. configurando el Autoload de las clases con PSR-4
    Se configura el composer.json para usar el autoload PSR-4
    "require": {},
    "autoload": {
        "psr-4": {
            "PlatziPHP\\": "src/"
        }
    }
    
    Se ejecuta 
    $ php composer.phar install 
    que generará el archivo de autoload "Generating autoload files" y que para usar habrá que incluir asi:

    require_once __DIR__ . './vendor/autoload.php';
    $user = new \PlatziPHP\User();

    Si se quiere evitar tener que usar tanto el namespace en la instanciacion de la clase se le indica a php que en ese contexto se va a usar User del namespace \PlatziPHP\User

    require_once __DIR__ . './vendor/autoload.php';
    use \PlatziPHP\User;
    $user = new User();
    
    o con un alias

    require_once __DIR__ . './vendor/autoload.php';
    use \PlatziPHP\User as User;
    $user = new User();
    
    y que generará una instancia asi vista en un var_dump:
    object(PlatziPHP\User)[2]
    public 'id' => string '' (length=0)

4. Configuracion de Pruebas unitarias con phunit
   agregar la dependencia al composer.json en las dependencias de desarrollo, NO 
   en las de produccion.
   
   $ php composer.phar require phpunit/phpunit --dev
   esto agregará la dependecia de phpunit al composer json y descargará el 
   componente phpunit/phpunit

   Se escribe la clase y el caso de prueba de la clase
   y se ejecuta con el comando:
   $ php  ./vendor/phpunit/phpunit/phpunit tests
   
   la funcion de prueba podria llamarse testX y seria reconocida por phpunit como 
   un caso de prueba, o podria llamarse X y para que phpunit lo reconozca como 
   una prueba a ejecutar debe tener la anotacion /** @test */

   $ php  ./vendor/phpunit/phpunit/phpunit tests
     PHPUnit 4.8.21 by Sebastian Bergmann and contributors.
     Time: 1.13 seconds, Memory: 5.00Mb
     OK (2 tests, 2 assertions)
4.1 Se escriben los modelos Autor y sus casos de prueba, el modelo Post y sus casos de prueba.
5. <p>Creando el objeto de valor Email ya no es del patron Entidad sino que la 
   identidad la da el valor que tiene, hasta aqui tenemos:</p>
   <ul> 
    <li><b>Objetos:</b> los objetos tienen un estado, mensajes(definen el comportamiento)</li> 
    <li><b>Mensajes:</b>  comportamiento, funciones</li>
    <li><b>Colaboracion:</b> hay colaboracion entre objetos como entre el Post y 
        el Autor del post, el post internamente usaba el autor en colaboración</li>
    <li><b>Herencia:</b> El Autor es hijo de Usuario</li>
    <li><b>Responsabilidad:</b> el objeto a traves de su comportamiento define 
        para si una unica responsabilidad </li>
   </ul>
   
   <ul> 
    <li><b>Composer:</b></li>
    <li><b>Dependencias:</b> instalacion y actualizacion de dependencias 
         componentes</li>
    <li><b>Autoloading:</b> usamos un estandar de autoloading el PSR-4</li>
   </ul>

   <ul> 
    <li><b>Testing:</b> cumpliendo los tres pasos de testing: 1- preparar el entorno, 
       2- ejecutar y 3- Comprobar</li>
    <li><b>Definicion:</b> es preparar el entorno, crear los objetos necesarios, etc</li>
    <li><b>Comprobacion:</b> Ejecutar la accion a validar, llamar el mensaje</li>
    <li><b>Mantenimiento:</b> algunas veces tenemos que cambiar los tests ya que 
        las clases pueden ir cambiando</li>
   </ul>

   <ul> 
    <li><b>Entidades:</b> Patron de diseño en el que se modelan las clases 
          son parte del problema que estamos solucionando</li>
    <li><b>Identidad:</b> tienen identidad independiente de su estado</li>
    <li><b>Modelo del Problema:</b> hacen parte del modelo del problema</li>
   </ul>

   <ul> 
    <li><b>Objetos de valor:</b> es otro patron de diseño son objetos que no son
         Entidades, son objetos que quizas antes eran tipos basicos y no tenian
         tanta importancia antes a la hora de hablar del problema como las entidades 
         pero son cosas necesarias de modelar para el proyecto.</li>
    <li><b>id <=> estado:</b> la identidad la da el estado, si cambia el valor 
         el objeto estara representando otra entidad ejemplo el Email </li>
    <li><b>inmutables:</b> No cambian su valor, cuando es necesario se crean nuevos 
         objetos.</li>
   </ul>

<h2> Iniciando PHP para la WEB </h2>
<p>Implementar PHP en la web, Arquitectura de la web como se comunican cliente y 
servidor, patron modelo vista controlador y el patron collections(fuera del contexto web)</p>

6. <b>Modelo vista Controlador</b>
Se escribira el controlador que mediará entre un request, el que sabe que hacer(dominio)
y quien sabe como mostrar el resultado(vista)

instalamos Ulliminate/Http con el comando <b>$ php composer.phar require Illuminate/Http</b> 
para utilizar Request y Response

Creamos carpeta Http para crear todos los objetos de la web y separar a traves de un 
namespace distinto para las cosas de la web separadas en el namespace de Dominio.

6.1 Se crea un controlador HomeController y se verifica que funcione, se crea el request 
 y se pasa el request al controlador, y se imprime un valor del request.   







