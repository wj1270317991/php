<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/12
 * Time: 上午10:17
 */

namespace db\factory;


class ssdb implements db
{
    public function conn(){
        echo "sssql is conn";
    }
}