<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');

return array (
  'Static' => 
  array (
    'user-old' => 
    array (
      0 => 'Controller\\Index',
      1 => 'dynamicRouteTest',
    ),
    '@home' => 
    array (
      0 => 'Controller\\Index',
      1 => 'index',
    ),
    'index' => 
    array (
      0 => 'Controller\\Index',
      1 => 'index',
    ),
    'test' => 
    array (
      0 => 'Controller\\Index',
      1 => 'test',
    ),
    'user/usage' => 
    array (
      0 => 'Controller\\user',
      1 => 'usage',
    ),
    'user/pay' => 
    array (
      0 => 'Controller\\user',
      1 => 'pay',
    ),
    'user/change' => 
    array (
      0 => 'Controller\\user',
      1 => 'ticket',
    ),
    'user/setting' => 
    array (
      0 => 'Controller\\user',
      1 => 'setting',
    ),
  ),
  'Dynamic' => 
  array (
    0 => 
    array (
      'callback' => 
      array (
        0 => 'Controller\\user',
        1 => 'index',
      ),
      'regexp' => '/^user$/i',
    ),
    1 => 
    array (
      'callback' => 
      array (
        0 => 'Controller\\user',
        1 => 'glance',
      ),
      'regexp' => '/^user\\/glance$/i',
    ),
  ),
  'Fallback' => 
  array (
  ),
);
