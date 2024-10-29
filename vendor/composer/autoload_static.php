<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77ae45a98a70d203386c323c81909b11
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'abTruncateDebugLog\\Plugin\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'abTruncateDebugLog\\Plugin\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit77ae45a98a70d203386c323c81909b11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77ae45a98a70d203386c323c81909b11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77ae45a98a70d203386c323c81909b11::$classMap;

        }, null, ClassLoader::class);
    }
}
