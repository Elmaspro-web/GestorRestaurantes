<?php

namespace App;

session_start();

class Usuario {

//    public static function login(string $correo, string $clave): ?Usuario
//    {
//
//    }

    public static function logout(): void
    {
        $_SESSION = array();
        session_destroy();
        setcookie(session_name(), '', time()-42000);
    }

};