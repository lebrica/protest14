<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3cbaca3b51725d1fecf16a360f08be2c
{
    public static $files = array (
        '538ca81a9a966a6716601ecf48f4eaef' => __DIR__ . '/..' . '/opis/closure/functions.php',
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'protest14\\Model\\' => 16,
            'protest14\\Controller\\' => 21,
            'protest14\\Component\\' => 20,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'PhpDocReader\\' => 13,
        ),
        'O' => 
        array (
            'Opis\\Closure\\' => 13,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'protest14\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'protest14\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
        'protest14\\Component\\' => 
        array (
            0 => __DIR__ . '/../..' . '/component',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Opis\\Closure\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/closure/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3cbaca3b51725d1fecf16a360f08be2c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3cbaca3b51725d1fecf16a360f08be2c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
