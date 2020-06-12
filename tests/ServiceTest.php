<?php
namespace test;
require __DIR__.'/../vendor/autoload.php';
use imyfone\test\Service;

class ServiceTest{

    public function run(){
        $obj = new Service();

        $msg = $obj->hello();
        return $msg;
    }
}
 $test = new ServiceTest();
 echo $test->run();

