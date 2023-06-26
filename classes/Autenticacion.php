<?php

namespace classes;


class Autenticacion
{

    public function logIn(string $email, string $password) {
        try{
            $user = (new \classes\Usuario())->getUserByEmail($email);
            if($user) {
                if($user->getPassword() == $password) {
                    return true;
                } else {
                    return false;
                }

            } else {
                return false;
            }
        } catch(Exception $e) {
            echo e->getMessage();
        }
        return false;
    }
}