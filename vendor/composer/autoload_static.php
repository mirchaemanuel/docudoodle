<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd12c45a00337348c6d2a166d694a1fa4
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Genericmilk\\Docudoodle\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Genericmilk\\Docudoodle\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd12c45a00337348c6d2a166d694a1fa4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd12c45a00337348c6d2a166d694a1fa4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd12c45a00337348c6d2a166d694a1fa4::$classMap;

        }, null, ClassLoader::class);
    }
}
