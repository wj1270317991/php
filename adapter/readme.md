适配器模式

    里面列举的是对象适配器
    
    类适配器的具体表示就就是
    
    
    需求：现在目标接口有两个方法，operation1，operation2，其中operation1在以前接口可以实现，但是operation2是需要自己增加接口来实现
    IAdaptee（源）声明一个接口（适配的源方法）
       1.Adaptee来实现IAdaptee
       2.自己定义一个适配器的目标接口 ITarget(目标接口，定义你需要的方法)
       3.定义一个适配器的实现（Adapter）来继承源适配器Adaptee（源），继承IAdaptee，继承ITarget里面的方法
       
       
       interface ITarget  
       {  
           function operation1();  
           function operation2();  
       }  
         
       interface IAdaptee  
       {  
           function operation1();  
       }  
         
       class Adaptee extends IAdaptee  
       {  
           public  function operation1()  
           {  
               echo "原方法";  
           }  
       }  
         
       class Adapter extends Adaptee implements IAdaptee, ITarget  
       {  
           public  function operation2()  
           {  
               echo "适配方法";  
           }  
       }  
         
       class Client  
       {  
           public  function test()  
           {  
               $adapter = new Adapter();  
               $adapter->operation1();//原方法  
               $adapter->operation2();//适配方法  
           }  
       }  