<?php

    namespace SimpleProject\View;

class Hello
 {

    private $name;

    public  function __construct($name)
    {
        $this->name= $name;
    }

    public function sayHello()
    {
        return sprintf("Hello %s!", $this->name);
    }

 }
