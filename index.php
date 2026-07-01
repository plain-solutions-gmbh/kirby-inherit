<?php

use Kirby\Cms\App;

App::plugin('plain/inherit', [
    'fieldMethods' => require __DIR__ . '/config/fieldMethods.php',
]);
