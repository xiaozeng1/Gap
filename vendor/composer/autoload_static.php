<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit751f5a38e51944f7abcee86d2169cd57
{
    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit751f5a38e51944f7abcee86d2169cd57::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}