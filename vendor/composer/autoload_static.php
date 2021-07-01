<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1682e3a980bd337ca9ff0781954fe0a5
{
    public static $files = array (
        '4fba3945d70320c6d6ccac8d3bda6a36' => __DIR__ . '/../..' . '/src/Helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jvizcaya\\Encodid\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jvizcaya\\Encodid\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Jvizcaya\\Encodid\\Classes\\Encodeid' => __DIR__ . '/../..' . '/src/Classes/Encodeid.php',
        'Jvizcaya\\Encodid\\EncodidServiceProvider' => __DIR__ . '/../..' . '/src/EncodidServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1682e3a980bd337ca9ff0781954fe0a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1682e3a980bd337ca9ff0781954fe0a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1682e3a980bd337ca9ff0781954fe0a5::$classMap;

        }, null, ClassLoader::class);
    }
}