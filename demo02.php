<?php
/**
 * Created by PhpStorm.
 * User: 王明帅
 * Date: 2018/12/17
 * Time: 13:47
 */

class Anmial{
    public function show(){
        return "我是动物大类";
    }
}

trait Dog{
    public $name="傻狗";
    public function showMe(){
        return "我王启星就是一条".$this->name;
    }
}

class Lv extends Anmial{
    use Dog;

    public function myShow(){
        return parent::show().",而且，".$this->showMe();
    }

}

$obj=new Lv();
$res=$obj->myShow();
echo $res;