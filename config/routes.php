<?php
/**
 *
 * PHP Version ～7.1
 * @package   routes.php
 * @author    yanchao <yanchao563@yahoo.com>
 * @time      2017/02/26 19:05
 * @copyright 2017
 * @license   www.guanlunsm.com license
 * @link      yanchao563@yahoo.com
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('', 'HomeController@home');

//Macaw::get('/(:any)', function($slug) {
//    echo 'The slug is: ' . $slug;
//});
//
//Macaw::get('/fuck', function() {
//    echo "成功！";
//});
//
//Macaw::get('(:all)', function($fu) {
//    echo '未匹配到路由<br>'.$fu;
//});

Macaw::dispatch();