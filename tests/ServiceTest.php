<?php
session_start();
require "admin/service.php";
use PHPUnit\Framework\TestCase;
class configurationTest extends TestCase
{
    private $obj;
    protected function setup() :void
    {
         $this->obj=new service;
    }
    
public function test_insert_data_admin()
{
    
    $this->assertTrue($this->obj->upload("test name","test price","test image"));
}
public function test_update_data_admin()
{
    $this->assertTrue($this->obj->updatecondition(114,"test name","test price","test image" ));
}
public function test_delete_data_admin()
{
    $this->assertTrue($this->obj->delete("115"));
}



}

?>