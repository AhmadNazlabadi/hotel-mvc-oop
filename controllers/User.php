<?php

class User
{
    public function __construct()
    {
        echo "this is user class controller";
    }
    public function login($name = null){
        echo "<br>login user from controller" . "---{$name}";
    }
}

?>