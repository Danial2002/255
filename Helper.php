<?php
class Helper{
    static function clearString($str){
        return trim(strip_tags($str));
    }


    public static function clearInt($str){
        return (int)$str;
    }
}