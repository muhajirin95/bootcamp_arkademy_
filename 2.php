<?php
    function username($user)
    {
        if ((preg_match("/^[a-z]*$/", $user)) && strlen($user)>=5 && strlen($user)<=9){
            
            return true;
        } else {


            return false;
        }
    }
    function password($pass)
    {
        $b = preg_match("/[A-Z]/", $pass);
        $k = preg_match("/[a-z]/", $pass);
        $a = preg_match("/[0-9]/", $pass);
        $c = preg_match("/[~!@#$%^&*()`]/", $pass);
        
        if($b && $k && $a && $c && strlen($pass)==10){

            return true;
        } else {

            return false;
        }
    }
?>