<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/12
 * Time: 下午4:35
 */

namespace adaptee;

abstract class Toy
{
    public abstract function openMouth();

    public abstract function closeMouth();
}

class Dog extends Toy
{
    public function openMouth()
    {
        echo "Dog open Mouth\n";
    }

    public function closeMouth()
    {
        echo "Dog close Mouth\n";
    }
}

class Cat extends Toy
{
    public function openMouth()
    {
        echo "Cat open Mouth\n";
    }

    public function closeMouth()
    {
        echo "Cat close Mouth\n";
    }
}