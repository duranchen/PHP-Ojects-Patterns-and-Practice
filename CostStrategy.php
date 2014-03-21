<?php

abstract class CostStrategy
{
    abstract function cost(Lesson1 $lesson);
    
    abstract function chargeType();
}

class TimedCostStrategy extends CostStrategy {
    function cost(Lesson1 $lesson) {
        return ($lesson->getDuration() * 5);
    }
    
    function chargeType() {
        return "hourly rate";
    }
}

class FixedCostStrategy extends CostStrategy {
    function cost(Lesson1 $lesson) {
        return 30;
    }
    
    function chargeType() {
        return "fixed rate";
    }
}

?>