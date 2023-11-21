<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa9b3fbc841aa321f4980cd96aa26d17
{
    public static $files = array (
        '617cbf4a54a78e4e14e211496a37d4cc' => __DIR__ . '/../..' . '/config/constant.php',
        'd2e2693a0cb975d2b8085bd1cd0b3498' => __DIR__ . '/../..' . '/helper/common.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa9b3fbc841aa321f4980cd96aa26d17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa9b3fbc841aa321f4980cd96aa26d17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa9b3fbc841aa321f4980cd96aa26d17::$classMap;

        }, null, ClassLoader::class);
    }
}