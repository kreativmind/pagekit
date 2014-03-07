<?php

return array(

    'app' => array(

        'version' => '0.8.0',

        'debug' => false,

        'timezone' => 'UTC',

        'locale' => 'en_US',

        'locale_admin' => 'en_US',

        'storage' => '/storage',

        'providers' => array(

            'Pagekit\Framework\Provider\ExceptionServiceProvider',
            'Pagekit\Framework\Provider\FileServiceProvider',
            'Pagekit\Framework\Provider\ConsoleServiceProvider',
            'Pagekit\Framework\Provider\ViewServiceProvider',
            'Pagekit\Framework\Provider\PaginationServiceProvider',
            'Pagekit\Component\Profiler\ProfilerServiceProvider',
            'Pagekit\Component\Cache\CacheServiceProvider',
            'Pagekit\Component\Cookie\CookieServiceProvider',
            'Pagekit\Component\Database\DatabaseServiceProvider',
            'Pagekit\Component\Auth\AuthServiceProvider',
            'Pagekit\Component\Auth\RememberMeServiceProvider',
            'Pagekit\Component\File\FilesystemServiceProvider',
            'Pagekit\Component\File\ResourceLocatorServiceProvider',
            'Pagekit\Component\Mail\MailServiceProvider',
            'Pagekit\Component\Markdown\MarkdownServiceProvider',
            'Pagekit\Component\Migration\MigrationServiceProvider',
            'Pagekit\Component\Option\OptionServiceProvider',
            'Pagekit\Component\Session\SessionServiceProvider',
            'Pagekit\Component\Translation\TranslationServiceProvider',
            'Pagekit\Component\View\AssetServiceProvider',
            'Pagekit\Component\View\CsrfServiceProvider',
            'Pagekit\Framework\Provider\ThemeServiceProvider',
            'Pagekit\Framework\Provider\ExtensionServiceProvider'

        )

    ),

    'api' => array(

        'url' => 'http://pagekit.com/alpha/api'

    ),

    'profiler' => array(

        'file' => '%path%/app/temp/profiler.db'

    ),

    'cache' => array(

        'default' => 'main',

        'caches'  => array(

            'main' => array(
                'storage' => 'auto',
                'path'    => '%path%/app/cache',
                'prefix'  => sha1(__DIR__)
            ),
            'phpfile' => array(
                'storage' => 'phpfile',
                'path'    => '%path%/app/cache',
            )

        )

    ),

    'session' => array(

        'storage'  => 'database',
        'lifetime' => 900,
        'files'    => '%path%/app/sessions',
        'table'    => '@system_session',
        'cookie'   => array(
            'name' => 'pagekit_session',
        )

    ),

    'database' => array(

        'default' => 'mysql',

        'connections' => array(

            'mysql' => array(

                'driver'   => 'pdo_mysql',
                'dbname'   => '',
                'host'     => 'localhost',
                'user'     => 'root',
                'password' => '',
                'engine'   => 'InnoDB',
                'charset'  => 'utf8',
                'collate'  => 'utf8_unicode_ci',
                'prefix'   => ''

            ),

            'sqlite' => array (
                'driver' => 'pdo_sqlite',
                'prefix' => 'pk_',
                'path' => '%path%/app/temp/sqlite.db'
            ),
        )

    ),

    'mail' => array(

        'driver'     => 'mail',
        'host'       => 'localhost',
        'port'       => 25,
        'encryption' => null,
        'username'   => null,
        'password'   => null,
        'from'       => array('address' => null, 'name' => null)

    ),

    'locator' => array(

        'wrappers' => array(
            'app'       => false,
            'storage'   => false,
            'extension' => true,
            'theme'     => true,
            'view'      => true,
            'asset'     => true
        ),

        'paths' => array(
            'app'       => '%path%',
            'storage'   => '%path.storage%',
            'extension' => '%path.extensions%',
            'theme'     => '%path.themes%',
            'vendor'    => '%path.vendor%'
        )

    ),

    'option' => array(

        'table' => '@system_option'

    ),

    'extension' => array(

        'path' => '%path.extensions%',
        'core' => array('installer', 'system')

    ),

    'theme' => array(

        'path'    => '%path.themes%',
        'class'   => 'Pagekit\System\Theme',
        'default' => 'alpha'

    )

);