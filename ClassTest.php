<?php

class ClassTest
{
    function className()
    {
        return __CLASS__;
    }
}


$class = new ClassTest();

print $class->className();
?>