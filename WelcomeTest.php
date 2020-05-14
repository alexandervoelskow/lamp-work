<?php
use PHPUnit\Framework\TestCase;
require 'Welcome.php';

class WelcomeTest extends TestCase {

    private $welcome;

    protected function setUp(){
        $this->welcome = new Welcome();
    }

    protected function tearDown(){
        $this->welcome = NULL;
    }

    public function testGreet(){
        $result = $this->welcome->greet();
        $this->assertEquals("Welcome to DevOps on AWS!",$result);
    }

}