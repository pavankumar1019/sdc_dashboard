<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ac91ee882b91e410e6a7bbfc4ce8e8a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2ac91ee882b91e410e6a7bbfc4ce8e8a::$classMap;

        }, null, ClassLoader::class);
    }
}
