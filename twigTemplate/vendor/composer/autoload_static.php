<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65dd122eebbcfbf89576ddfba067c844
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65dd122eebbcfbf89576ddfba067c844::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65dd122eebbcfbf89576ddfba067c844::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit65dd122eebbcfbf89576ddfba067c844::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit65dd122eebbcfbf89576ddfba067c844::$classMap;

        }, null, ClassLoader::class);
    }
}
