<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite96b57c06aab0a5a30a2610274a2fd23
{
    public static $files = array (
        '9991df661be66a195be7331413b79ccc' => __DIR__ . '/../..' . '/registration.php',
        '3fabe0f710f1fb6b5d8b6be199883962' => __DIR__ . '/..' . '/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'J' => 
        array (
            'Jlmsrl\\Iderlogin\\' => 17,
        ),
        'I' => 
        array (
            'IDERConnect\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Jlmsrl\\Iderlogin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'IDERConnect\\' => 
        array (
            0 => __DIR__ . '/..' . '/jlmsrl/ider-openid-client-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite96b57c06aab0a5a30a2610274a2fd23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite96b57c06aab0a5a30a2610274a2fd23::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
