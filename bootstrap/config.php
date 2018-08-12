<?php
/**
 * Created by PhpStorm.
 * User: didar
 * Date: 8/12/18
 * Time: 2:33 PM
 */
define('APP_NAME', 'Flight-Skeleton');
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/' . APP_NAME . '/');

Flight::set('flight.views.path', BASE_PATH . 'resources/views');

