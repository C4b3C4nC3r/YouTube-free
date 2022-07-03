<?php
    /**
     * 
     * Actually didn`t use
     * 
     */


    namespace Config;


    return [

        "LANG"=>$_ENV["LANG"],
        "APP_NAME"=>$_ENV["APP_NAME"],
        "VERSION"=>$_ENV["VERSION"],
        "AUTHOR"=>$_ENV["AUTHOR"],
        "AGE"=>$_ENV["AGE"],
        
        /**
         * 
         * CONFIG DATABASE => THE DATA IN .ENV
         * 
         */

        "DATABASE_NAME"=>$_ENV["DATABASE_NAME"],
        "DATABASE_HOST"=>$_ENV["DATABASE_HOST"],
        "DATABASE_PASSWORD"=>$_ENV["DATABASE_PASSWORD"],
        "DATABASE_USER"=>$_ENV["DATABASE_USER"],
        "DATABASE_CHARSET"=>$_ENV["DATABASE_CHARSET"]

    ];

