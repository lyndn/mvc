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
    public function __construct()
    {
        global $koiterm;
        $this->_koiterm = &$koiterm;
    }

}