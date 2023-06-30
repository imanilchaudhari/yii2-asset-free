<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => getenv('DB_DSN', 'mysql:host=localhost;dbname=database'),
    'username' => getenv('DB_USERNAME', 'root'),
    'password' => getenv('DB_PASSWORD', 'root'),
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
