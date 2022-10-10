<?php

    function lang($tradiction){

        static $lang = Array(

            // header 
            'Hotel' => "Hotel",
            'Rooms' => "Rooms",
            'menu' => "menu",
            'About' => "About",
            'Sign in' => "Sign in",

            //sign in 
            'Username' => "Username",
            'Password' => "Password",
            'Log In Now' => "Log In Now",
            'Log Up Now' => "Log Up Now",

        );

        return $lang[$tradiction];
    };