<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13a4e48aa4cc36990c20db191a493daa
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VirtualAge\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VirtualAge\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13a4e48aa4cc36990c20db191a493daa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13a4e48aa4cc36990c20db191a493daa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}