<?php

abstract class Lesson
{
    protected $duration;
    
    const FIXED =1 ;
    
    const TIMED =2 ;
    
    private  $costtype;
    
    function __construct($durantion , $costtype =1 ) {
        $this->duration = $durantion;
        $this->costtype = $costtype;
    }
    
    function cost() {
        switch ($this->costtype) {
        	case self::TIMED :
        	    return (5 *$this->duration);
        	    break;
        	case self::FIXED :
        	    return 30;
        	    break;
        	default ;
        	   $this->costtype =self::FIXED;
        	   return 30;
        }
    }
    
    function chargeType() {
        switch ($this->costtype) {
        	case self::TIMED :
        	    return "hourly rate";
        	    break;
        	
        	case self::FIXED :
        	    return "fixed rate";
        	    break;
            
        	default :
        	    $this->costtype = self::FIXED;
        	    return "fixed rate";
        }
    }
}


class Lecture extends Lesson {
    
}

class Seminar extends lesson {
    
}
?>