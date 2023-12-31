<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5387ff96939c0cd8cbd1cc5f7bfd23a1
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Randika\\Contact\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Randika\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5387ff96939c0cd8cbd1cc5f7bfd23a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5387ff96939c0cd8cbd1cc5f7bfd23a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5387ff96939c0cd8cbd1cc5f7bfd23a1::$classMap;

        }, null, ClassLoader::class);
    }
}
