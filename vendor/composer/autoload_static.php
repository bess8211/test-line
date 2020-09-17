<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f5eda87880a97a71b4345b8a730f072
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f5eda87880a97a71b4345b8a730f072::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f5eda87880a97a71b4345b8a730f072::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
