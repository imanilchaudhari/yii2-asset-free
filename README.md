<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Asset Free Template</h1>
    <br>
</p>

This is a project template suitable for API & console apps. This app template is without the bower & npm package, which makes it lightweight.

DIRECTORY STRUCTURE
-------------------

      config/             contains application configurations
      database/           contains database migrations, seeders
      public/             contains the entry script and Web resources
      resources/          contains various tests for the basic application
        mail/             contains view files for e-mails
      runtime/            contains files generated during runtime
      src/
        commands/         contains console commands (controllers)
        controllers/      contains Web controller classes
        models/           contains model classes
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages


REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 7.4.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](https://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](https://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist imanilchaudhari/yii2-asset-free basic-api
~~~

Now you should be able to access the application through the following URL, assuming `basic-api` is the directory
directly under the Web root.

~~~
http://localhost/basic-api/public/
~~~

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=database',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.
