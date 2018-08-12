<?php
/**
 * Created by PhpStorm.
 * User: didar
 * Date: 8/12/18
 * Time: 2:37 PM
 */

namespace Controller;


class HomeController
{
    public function showHome()
    {
        \Flight::render('./common/header.php');
        \Flight::render('./home.php', ['message' => 'This is home body']);
        \Flight::render('./common/footer.php');
    }
}