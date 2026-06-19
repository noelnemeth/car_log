<?php

return [
    'class' => \yii\db\Connection::class,
    'dsn' => 'sqlite:@app/db.sqlite',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
