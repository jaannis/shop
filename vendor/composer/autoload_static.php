<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite85e372f60ac25d1e0e8773b81db1379
{
    public static $classMap = array (
        'ComposerAutoloaderInite85e372f60ac25d1e0e8773b81db1379' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInite85e372f60ac25d1e0e8773b81db1379' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite85e372f60ac25d1e0e8773b81db1379::$classMap;

        }, null, ClassLoader::class);
    }
}