<?php

namespace MVC\models;
use MVC\core\model;

class user extends model {

    public function GetAllUsers(){

        $data=model::db()->rows("SELECT * FROM user");
        
        return $data;
    }

    public function GetUser($email,$password){
        $data=model::db()->row("SELECT * FROM user where `email` = ? && `password` = ?",[$email,$password]);
        
        return $data;
    }

    public function RegisterUser($email,$password){
        $data=model::db()->insert('user', ['email' => $email, 'password' => $password]);
        
        return $data;
    }

}