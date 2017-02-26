<?php
/**
 *
 * PHP Version ～7.1
 * @package   orm.php
 * @author    yanchao <yanchao563@yahoo.com>
 * @time      2017/02/26 20:33
 * @copyright 2017
 * @license   www.guanlunsm.com license
 * @link      yanchao563@yahoo.com
 */
use Koiterm\Orm\Table;
use Koiterm\Orm\Db as DB;

class orm extends Table{
    public function __construct() {
        $this->_table = 'syscache';
        $this->_pk    = 'cname';
        parent::__construct();
    }
    public function fetch_all($id='setting'){
        $config = DB::fetch_first('SELECT * FROM %t WHERE cname=%s', array($this->_table, $id));
        return $config;
    }
}