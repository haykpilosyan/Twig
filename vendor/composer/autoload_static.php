<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3d198f6a66886fae6b0e31b74f407aa
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3d198f6a66886fae6b0e31b74f407aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3d198f6a66886fae6b0e31b74f407aa::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb3d198f6a66886fae6b0e31b74f407aa::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
