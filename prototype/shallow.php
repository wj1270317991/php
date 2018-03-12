<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/12
 * Time: 下午3:26
 */

namespace prototype;


class Contained {
    public $now = 5;
}

class Container {
    public $contained;
    function __construct() {
        $this->contained = new Contained();
    }

//    function __clone() {
//        $this->contained = clone $this->contained;
//    }
}

$original = new Container();
$copy = clone $original;
$original->contained->now = -1;//改变引用的值对象
print_r( $original );
print_r( $copy );