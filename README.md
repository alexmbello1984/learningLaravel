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