<?php
require_once 'Notifier.php';

class RegistrationMgr
{

    function register (Lesson1 $lesson)
    {
        // ����γ�
        
        // ֪ͨĳ��
        $notifier = Notifier::getNotifier();
        
        $notifier->inform("new lesson: cost ({$lesson->cost()})");
    }
}

?>