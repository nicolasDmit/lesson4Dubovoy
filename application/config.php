<?php

if (!defined('ROOT_DIR')) {
    define('ROOT_DIR', realpath(__DIR__ . '/../'));
}
if (!defined('PUBLIC_DIR')) {
    define('PUBLIC_DIR', ROOT_DIR . '/public/');
}
if (!defined('APP_DIR')) {
    define('APP_DIR', ROOT_DIR . '/application/');
}

if (!defined('UPLOADS_DIR')) {
    define('UPLOADS_DIR', ROOT_DIR . '/uploads/');
}

if (!defined('PUB_UPLOADS_DIR')) {
    define('PUB_UPLOADS_DIR', PUBLIC_DIR . 'uploads/');
}

if (!defined('PUBLIC_UPLOADS')) {
    define('PUBLIC_UPLOADS', '/uploads/');
}