<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita84257c972ced7bbb3f781f5c9c9ab74
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WilliamCosta\\DotEnv\\' => 20,
            'WilliamCosta\\DatabaseManager\\' => 29,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WilliamCosta\\DotEnv\\' => 
        array (
            0 => __DIR__ . '/..' . '/william-costa/dot-env/src',
        ),
        'WilliamCosta\\DatabaseManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/william-costa/database-manager/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita84257c972ced7bbb3f781f5c9c9ab74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita84257c972ced7bbb3f781f5c9c9ab74::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita84257c972ced7bbb3f781f5c9c9ab74::$classMap;

        }, null, ClassLoader::class);
    }
}
