<?php

    function lang($tradiction){

        static $lang = Array(

            // header 
            'Hotel' => "فندق",
            'Rooms' => "غرف",
            'menu' => "قائمة",
            'About' => "معلومات عنا",
            'Sign in' => "تسجيل الدخول",

        );

        return $lang[$tradiction];
    };