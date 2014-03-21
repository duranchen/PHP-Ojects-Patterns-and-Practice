<?php
require_once 'Notifier.php';

class RegistrationMgr
{

    function register (Lesson1 $lesson)
    {
        // 处理课程
        
        // 通知某人
        $notifier = Notifier::getNotifier();
        
        $notifier->inform("new lesson: cost ({$lesson->cost()})");
    }
}

?>