<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/12
 * Time: 下午4:36
 */

namespace adaptee;


//目标角色:红枣遥控公司
interface RedTarget
{
    public function doMouthOpen();

    public function doMouthClose();
}

//目标角色:绿枣遥控公司及
interface GreenTarget
{
    public function operateMouth($type = 0);
}