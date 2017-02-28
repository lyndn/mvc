<?php
/**
 *
 * PHP Version ～7.1
 * @package   BaseController.php
 * @author    yanchao <yanchao563@yahoo.com>
 * @time      2017/02/26 19:26
 * @copyright 2017
 * @license   www.guanlunsm.com license
 * @link      yanchao563@yahoo.com
 */

class BaseController
{
    public $_koiterm;
    public $_twig;
    public function __construct()
    {
        global $koiterm;
        global $twig;
        $this->_koiterm = &$koiterm;
        $this->_twig = &$twig;

        //IN_MOBILE
        if($this->_koiterm->var['mobile']) {
            $this->_koiterm->var['cache']['style_default']['tpldir'] = $this->_koiterm->var['mobiletpl'][2];
        }
    }

}