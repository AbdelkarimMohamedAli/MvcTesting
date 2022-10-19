<?php

namespace MVC\core;

class helpers{

    public static function redirect($path){

        return header('LOCATION: DOMAIN_NAME'.$path);
    }
}