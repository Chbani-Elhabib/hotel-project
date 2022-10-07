<?php

    function lang($tradiction){

        static $lang = Array(

            // header 
            'Hotel' => "Hotel",
            'Rooms' => "Rooms",
            'menu' => "menu",
            'About' => "About",
            'Sign in' => "Sign in",

        );

        return $lang[$tradiction];
    };