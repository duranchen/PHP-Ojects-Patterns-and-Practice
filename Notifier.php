<?php

abstract class Notifier
{
    static function getNotifier() {
        
        
        
        if(rand(1,2) == 1) {
            return new MailNotifier();
        } else {
            return new TextNotifier();
        }
    }
    
    abstract function inform($message);
}

class MailNotifier extends Notifier {
    function inform($message) {
        print "MAIL notification: {$message}\n";
    }
}


class TextNotifier extends Notifier {
    function inform($message) {
        print "TEXT notification: {$message}\n";
    }
}
?>