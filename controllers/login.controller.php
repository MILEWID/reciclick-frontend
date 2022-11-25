<?php
class LoginController{
    function __construct()
    {
    }
    
    public static function login(){
        if(isset($_POST["email"]) && isset($_POST["password"])){
            if($_POST["email"] == "admin@gmail.com"){
                $_SESSION["rol"] = 1;
            }else{
                $_SESSION["rol"] = 2;
            }
            header("Location:".URL_BASE_APP."admin/dashboard");
        }
    }
}