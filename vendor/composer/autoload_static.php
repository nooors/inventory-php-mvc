<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4c3e9e8fd4875e98f6b0c938c914189
{
    public static $files = array (
        '0a80d26768cd24fcdbe75bdd719255c1' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/fb.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FB' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/fb.php',
        'FirePHP' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/FirePHP.class.php',
        'FirePHP_TestWrapper' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/FirePHP_TestWrapper.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf4c3e9e8fd4875e98f6b0c938c914189::$classMap;

        }, null, ClassLoader::class);
    }
}
