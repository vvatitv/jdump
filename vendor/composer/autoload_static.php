<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita392acc0c829b96deb2d24b34343b517
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '0a081997434fd9337920700905639534' => __DIR__ . '/..' . '/wanfeiyy/dd/src/Dd/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\Handler\\' => 15,
            'Whoops\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'D' => 
        array (
            'Dd\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\Handler\\' => 
        array (
            0 => __DIR__ . '/..' . '/whoops/soap/src',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Dd\\' => 
        array (
            0 => __DIR__ . '/..' . '/wanfeiyy/dd/src/Dd',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita392acc0c829b96deb2d24b34343b517::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita392acc0c829b96deb2d24b34343b517::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita392acc0c829b96deb2d24b34343b517::$classMap;

        }, null, ClassLoader::class);
    }
}
