<?php

    function lang($tradiction){

        static $lang = Array(

            // header 
            'Hotel' => "فندق",
            'Rooms' => "غرف",
            'menu' => "قائمة",
            'About' => "معلومات عنا",
            'Sign in' => "تسجيل الدخول",

            //sign in 
            'Username'  => "اسم المستخدم",
            'Password'  => "كلمة المرور",
            'Log In Now'  => "تسجيل الدخول الآن",
            'Log Up Now'  => "سجل الان",

        );

        return $lang[$tradiction];
    };