<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit372479b28eb5c5ba2f294ddc1b2d6e8d
{
    public static $classMap = array (
        'test' => __DIR__ . '/../..' . '/namespace/test.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit372479b28eb5c5ba2f294ddc1b2d6e8d::$classMap;

        }, null, ClassLoader::class);
    }
}
