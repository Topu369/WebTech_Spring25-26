<?php
$name="";
$password="";
$validpassword="";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST["name"];
        $password=$_POST["password"];

if(!empty($name) && strlen($name)>5)
    {
        echo "User Name".$name;
    }else{
        echo "Name must be greater than 5 char";
    }

    if(strlen($password)>=8)
        {
            $validpassword=$password;
            echo "Password".$validpassword;
        }else
        {
            $validpassword= "Password should be at least 8 char";
        }

    }
?>