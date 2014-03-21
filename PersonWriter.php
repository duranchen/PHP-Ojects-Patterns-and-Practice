<?php
include_once 'Person.php';
class PersonWriter
{
    function writeName(Person $p) {
        print $p->getName();
    }
    
    function writeAge(Person $p) {
        print $p->getAge();
    }
}

?>