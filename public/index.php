<?php
/**
 *
 * PHP Version ～7.1
 * @package   index.php
 * @author    yanchao <yanchao563@yahoo.com>
 * @time      2017/02/26 19:03
 * @copyright 2017
 * @license   www.guanlunsm.com license
 * @link      yanchao563@yahoo.com
 */

// Eloquent ORM
use Illuminate\Database\Capsule\Manager as Capsule;

require '../vendor/autoload.php';

//Koiterm and ORM
use Koiterm\Init\Core;
$C = new Core();
$koiterm = $C->creatapp();
$koiterm->init();


// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require '../config/database.php');
$capsule->bootEloquent();



//Twig Template Engine
$loader = new Twig_Loader_Filesystem('./../app/views');
$twig = new Twig_Environment($loader, array(
    'cache' => './../app/data/cache',
));



// Route Config
require '../config/routes.php';

