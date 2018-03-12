<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/12
 * Time: 下午2:50
 */

namespace prototype;

require "Cloneme.php";
class Persion extends Cloneme
{
    public function __construct()
    {
        $this->picture = "cloneMan";
        $this->name= "Original";
    }

    public function display(){
        echo "persion display " . $this->name .' '.$this->picture . "<br>";
    }

//    public function __clone()
//    {
//        echo "clone <br>";
//    }
}

$worker = new Persion();
$worker->display();


$slacker = clone  $worker;
$worker->picture = "newimage";

$worker->display();

$slacker->display();