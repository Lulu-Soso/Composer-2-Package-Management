<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fc23f1d78a8f3860f6f117b033287af
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fc23f1d78a8f3860f6f117b033287af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fc23f1d78a8f3860f6f117b033287af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fc23f1d78a8f3860f6f117b033287af::$classMap;

        }, null, ClassLoader::class);
    }
}
