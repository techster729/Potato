<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc352a6fb8101fd7e0c56408b8436438
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/Core/App.php',
        'ComposerAutoloaderInitdc352a6fb8101fd7e0c56408b8436438' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitdc352a6fb8101fd7e0c56408b8436438' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/Core/Database/Connection.php',
        'PagesController' => __DIR__ . '/../..' . '/app/Controllers/PagesController.php',
        'PostsController' => __DIR__ . '/../..' . '/app/Controllers/PostsController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/Core/Database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/Core/Request.php',
        'Router' => __DIR__ . '/../..' . '/Core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitdc352a6fb8101fd7e0c56408b8436438::$classMap;

        }, null, ClassLoader::class);
    }
}