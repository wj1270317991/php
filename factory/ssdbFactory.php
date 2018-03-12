<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/12
 * Time: 上午10:30
 */

namespace db\factory;
require "ssdb.php";


class ssdbFactory implements Factory
{
    public function createDB(){
        return new ssdb();
    }
}