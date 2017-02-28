<?php
/**
 *
 * PHP Version ～7.1
 * @package   HomeController.php
 * @author    yanchao <yanchao563@yahoo.com>
 * @time      2017/02/26 19:27
 * @copyright 2017
 * @license   www.guanlunsm.com license
 * @link      yanchao563@yahoo.com
 */
use Koiterm\Init\Core as C;
class HomeController extends BaseController
{
    public function home()
    {
        $a = C::t('orm')->fetch_all();
        echo $this->_twig->render($this->_koiterm->var['cache']['style_default']['tpldir'].'/index.html', array("a" => var_dump($a)));
    }
}