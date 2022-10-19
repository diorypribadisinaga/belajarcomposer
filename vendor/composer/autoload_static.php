<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2c4b3aae40b20e4c0103c7155668bad
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sinagadiory\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sinagadiory\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita2c4b3aae40b20e4c0103c7155668bad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2c4b3aae40b20e4c0103c7155668bad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2c4b3aae40b20e4c0103c7155668bad::$classMap;

        }, null, ClassLoader::class);
    }
}
