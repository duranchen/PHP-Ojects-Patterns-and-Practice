<?php
require_once 'ShopProduct.php';

// $prod_class = new ReflectionClass('CdProduct');

// Reflection::export($prod_class);


function classData(ReflectionClass $class)
{
    $details ="";
    
    $name = $class->getName();
    
    if($class->isUserDefined()){
        $details .="$name is user defined\n";
    }
    
    if($class->isInternal()){
        $details .="$name is built-in\n";
    }
    
    if($class->isInterface()) {
        $details .="$name is interface\n";
    }
    
    if($class->isAbstract()) {
        $details .="$name is abstract\n";
    }
    
    if($class->isFinal()) {
        $details .="$name is a final class\n";
    }
    
    if($class->isInstantiable()) {
        $details .="$name can be instactiated\n";
    } else {
        $details .= "$name can not be instactiated\n";
    }
    
    return $details;
   
}

$prod_class = new ReflectionClass('CdProduct');

print classData($prod_class);