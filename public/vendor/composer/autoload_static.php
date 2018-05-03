<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf027d9065d1779337098bb3dc1495a7
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'palanik\\lumen\\Middleware\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'palanik\\lumen\\Middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/palanik/lumen-cors',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf027d9065d1779337098bb3dc1495a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf027d9065d1779337098bb3dc1495a7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}