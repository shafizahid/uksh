<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35d0a1d4ca4647d6609bc49a3e14e306
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MBEI\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MBEI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35d0a1d4ca4647d6609bc49a3e14e306::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35d0a1d4ca4647d6609bc49a3e14e306::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
