<?php

@include_once __DIR__ . '/utils/load.php';

use Plain\Helpers\Plugin;

Plugin::load('plain/inherit', autoloader: ['config', 'cache' => false]);
