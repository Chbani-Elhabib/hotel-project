<?php

    function lang($tradiction){

        static $lang = Array(

            // header 
            'Hotel' => "فندق",
            'Rooms' => "غرف",
            'menu' => "قائمة",
            'About' => "معلومات عنا",
            'Sign in' => "تسجيل الدخول",

            //Footer
            'Company' => "شركة",
            'Services' => "خدمات",
            'Contact' => "تواصل معنا",
            'follow us' => "تابعنا",
            'Careers' => "وظائف",
            'Blog' => "مقالات",
            'How we work' => "كيف نعمل",
            'FAQ' => "الأسئلة الشائعة",
            'lang' => "الإنجليزية",
            'Roums' => "غرف",
            'Type Services' => "أنواع الخدمات",
            'Food' => "الطعام",
            'adriss' => "عنوان",
            'Email' => "contact@hotel.com",
            'Tel' => "06-61-05-99-51",
            'Tel_tabit' => "+ 212-528-263-799",
            'Copyright' => "حقوق النشر",
            'linkhotel' => "Hotel.com",

            //sign in 
            'Username'  => "اسم المستخدم",
            'Password'  => "كلمة المرور",
            'Log In Now'  => "تسجيل الدخول الآن",
            'Log Up Now'  => "سجل الان",

        );

        return $lang[$tradiction];
    };