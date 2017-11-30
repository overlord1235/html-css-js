<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ac96043c3fdfeb18ff98b0446cad637
{
    public static $classMap = array (
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/app/controllers/AdminController.php',
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/controllers/LoginController.php',
        'App\\Controllers\\NormalController' => __DIR__ . '/../..' . '/app/controllers/NormalController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Core\\Session' => __DIR__ . '/../..' . '/core/Session.php',
        'App\\Models\\PlayerModel' => __DIR__ . '/../..' . '/app/models/PlayerModel.php',
        'App\\Models\\Project' => __DIR__ . '/../..' . '/app/models/Project.php',
        'App\\Models\\TeamModel' => __DIR__ . '/../..' . '/app/models/TeamModel.php',
        'App\\Models\\UserModel' => __DIR__ . '/../..' . '/app/models/UserModel.php',
        'ComposerAutoloaderInit3ac96043c3fdfeb18ff98b0446cad637' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit3ac96043c3fdfeb18ff98b0446cad637' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3ac96043c3fdfeb18ff98b0446cad637::$classMap;

        }, null, ClassLoader::class);
    }
}
