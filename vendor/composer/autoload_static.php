<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10bf8f11e28959a0d23e8235f043a17c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10bf8f11e28959a0d23e8235f043a17c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10bf8f11e28959a0d23e8235f043a17c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
