<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/12
 * Time: 上午10:30
 */

namespace db\factory;
require "mysqldb.php";
require "Factory.php";

class mysqldbFactory implements Factory
{
    public function createDB(){
        return new mysqldb();
    }
}