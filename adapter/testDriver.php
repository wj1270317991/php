<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/12
 * Time: 下午4:39
 */

namespace adaptee;
require "Adaptee.php";
require "Adapter.php";

class testDriver
{
    public function run()
    {
        //实例化一只狗玩具
        $adaptee_dog = new Dog();
        echo "给狗套上红枣适配器\n";
        $adapter_red = new RedAdapter($adaptee_dog);
        //张嘴
        $adapter_red->doMouthOpen();
        //闭嘴
        $adapter_red->doMouthClose();
        echo "给狗套上绿枣适配器\n";
        $adapter_green = new GreenAdapter($adaptee_dog);
        //张嘴
        $adapter_green->operateMouth(1);
        //闭嘴
        $adapter_green->operateMouth(0);
    }
}
$test = new testDriver();
$test->run();