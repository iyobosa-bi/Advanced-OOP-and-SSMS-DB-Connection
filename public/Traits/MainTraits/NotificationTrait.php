<?php 

trait NotificationTrait{

         public function notify(string $message) {
        print "[NOTIFY]: $message\n";
    }
}