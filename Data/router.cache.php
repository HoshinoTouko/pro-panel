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
  ),
  'Dynamic' => 
  array (
    0 => 
    array (
      'callback' => 
      array (
        0 => 'Controller\\user',
        1 => 'user',
      ),
      'regexp' => '/^user\\/(\\w+)$/i',
    ),
    1 => 
    array (
      'callback' => 
      array (
        0 => 'Controller\\user',
        1 => 'node_details',
      ),
      'regexp' => '/^user\\/node\\/(\\w+)$/i',
    ),
    2 => 
    array (
      'callback' => 
      array (
        0 => 'Controller\\user',
        1 => 'index',
      ),
      'regexp' => '/^user$/i',
    ),
    3 => 
    array (
      'callback' => 
      array (
        0 => 'Controller\\userEdit',
        1 => 'changeConfirm',
      ),
      'regexp' => '/^user\\/change\\/(\\w+)$/i',
    ),
  ),
  'Fallback' => 
  array (
  ),
);
