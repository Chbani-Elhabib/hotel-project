<?php

    function lang($tradiction){

        static $lang = Array(

            // Header 
            'Hotel' => "Hotel",
            'Rooms' => "Rooms",
            'menu' => "menu",
            'About' => "About",
            'Sign in' => "Sign in",

            //Footer
            'Company' => "Company",
            'Services' => "Services",
            'Contact' => "Contact",
            'follow us' => "follow us",
            'Careers' => "Careers",
            'Blog' => "Blog",
            'How we work' => "How we work",
            'FAQ' => "FAQ",
            'lang' => "Arabic",
            'Roums' => "Roums",
            'Type Services' => "Type Services",
            'Food' => "Food",
            'adriss' => "adriss",
            'Email' => "contact@hotel.com",
            'Tel' => "06-61-05-99-51",
            'Tel_tabit' => "+ 212-528-263-799",
            'Copyright' => "Copyright",
            'linkhotel' => "Hotel.com",

            //Sign in 
            'Username' => "Username",
            'Password' => "Password",
            'Log In Now' => "Log In Now",
            'Log Up Now' => "Log Up Now",

        );

        return $lang[$tradiction];
    };