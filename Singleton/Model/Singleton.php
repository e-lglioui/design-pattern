<?php
class Singleton{
    private static $objet =null;

    private function __construct(){
      //process
    }

    
    public static function cretinsobjet(){
        if($objet =null){
            self::$objet=new Singleton();
        }
        return self::$objet;


    }


}