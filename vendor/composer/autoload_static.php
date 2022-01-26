<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf4f188b7d2bebb6b8f401ecab67e6c4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Staff\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Staff\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Staff',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf4f188b7d2bebb6b8f401ecab67e6c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf4f188b7d2bebb6b8f401ecab67e6c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf4f188b7d2bebb6b8f401ecab67e6c4::$classMap;

        }, null, ClassLoader::class);
    }
}