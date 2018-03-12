<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/12
 * Time: 下午4:37
 */

namespace adaptee;
require "Target.php";

//类适配器角色:红枣遥控公司
class RedAdapter implements RedTarget
{
    private $adaptee;

    function __construct(Toy $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    //委派调用Adaptee的sampleMethod1方法
    public function doMouthOpen()
    {
        $this->adaptee->openMouth();
    }

    public function doMouthClose()
    {
        $this->adaptee->closeMouth();
    }
}

//类适配器角色:绿枣遥控公司
class GreenAdapter implements GreenTarget
{
    private $adaptee;

    function __construct(Toy $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    //委派调用Adaptee：GreenTarget的operateMouth方法
    public function operateMouth($type = 0)
    {
        if ($type) {
            $this->adaptee->openMouth();
        } else {
            $this->adaptee->closeMouth();
        }
    }
}