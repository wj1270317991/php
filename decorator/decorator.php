<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2018/3/14
 * Time: 上午9:36
 */

namespace decorator;


/**
 * 被修饰类
 现在的需求：
 要求能够动态为CD添加音轨、能显示CD音轨列表。
 显示时应采用单行并且为每个音轨都以音轨好为前缀。
 */
class CD
 {
       public $trackList;
     function __construct()
     {
               # code...
         $this->trackList=array();
     }

     public function addTrack($track){
               $this->trackList[]=$track;
     }

     public function getTrackList(){

         $output=" ";
         foreach ($this->trackList as $key => $value) {
                       # code...
             $output.=($key+1).") {$value}. ";
         }
         return $output;
     }
 }



/*
 现在需求发生变化：
 要求将当前实例输出的音轨都采用大写形式。
 这个需求并不是一个变化特别大的需求，不需要修改基类或创建一个父子关系的子类，此时创建一个基于装饰器模式的装饰器类。
 */
 class CDTrackListDecoratorCaps{
     private $_cd;

     public function __construct(CD $CD){
               $this->_cd=$CD;
     }

     public function makeCaps(){
               foreach ($this->_cd->trackList as $key => $value) {
                      # code...
             $this->_cd->trackList[$key]=strtoupper($value);  //转换成大写
         }
     }
 }


 //客户端测试：
 $myCD=new CD();

 $trackList=array(
     "what It Means",
     "brr",
     "goodBye"
     );
 foreach ($trackList as $key => $value) {
       # code...
     $myCD->addTrack($value);
 }
 $myCDCaps=new CDTrackListDecoratorCaps($myCD);
 $myCDCaps->makeCaps();
 print "The CD contains the following tracks:".$myCD->getTrackList();












