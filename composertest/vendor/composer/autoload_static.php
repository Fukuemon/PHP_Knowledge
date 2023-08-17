<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0138a87a2285ef5259e372409b569c9
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fuku079\\Composertest\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fuku079\\Composertest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita0138a87a2285ef5259e372409b569c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0138a87a2285ef5259e372409b569c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0138a87a2285ef5259e372409b569c9::$classMap;

        }, null, ClassLoader::class);
    }
}
