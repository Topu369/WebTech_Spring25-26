<?php
session_start();
$name="";
$password="";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST["name"];
        $password=$_POST["password"];

        if(!empty($name) && strlen($name)>=4 && strlen($password)>=8)
            {
                $_SESSION["name"]=$name;
                setcookie('name',$name,time()+3600,"/");
                echo "login successful";
            }else
            {
                echo "Please try again";
            }


            if(isset($_SESSION["name"]) || isset($_COOKIE["name"]))
                {
                    echo "Welcome back";
                }
                else
                    {
                        echo "Please login again";
                    }
    }
?>