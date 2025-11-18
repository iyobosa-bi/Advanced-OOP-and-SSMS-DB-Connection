<?php


trait LoggerTrait{

    public function log(string $message) {
        print "[LOG]: $message\n";
    }


}