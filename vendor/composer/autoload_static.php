<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e6d102244679cd551c9e6620c067e95
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e6d102244679cd551c9e6620c067e95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e6d102244679cd551c9e6620c067e95::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
