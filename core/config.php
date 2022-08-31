<?php

return [
  'mysql' => [
    'host' => '127.0.0.1',
    'port' => '3306',
    'username' => 'root',
    'password' => 'x',
    'db' => 'nameless',
    'charset' => 'utf8mb4',
    'initialise_charset' => true,
  ],
  'remember' => [
    'cookie_name' => 'nl2',
    'cookie_expiry' => 604800,
  ],
  'session' => [
    'session_name' => '2user',
    'admin_name' => '2admin',
    'token_name' => '2token',
  ],
  'core' => [
    'hostname' => 'localhost',
    'path' => 'MinePixelWebsite',
    'friendly' => false,
    'force_https' => false,
    'force_www' => false,
    'captcha' => false,
    'date_format' => 'd M Y, H:i',
    'trustedProxies' => NULL,
    'installed' => true,
  ],
];