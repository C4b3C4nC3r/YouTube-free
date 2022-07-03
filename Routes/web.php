<?php

namespace Routes;

use App\Http\Controller\Document;
use App\Http\Controller\Home;
use App\Http\Controller\Login;
use App\Http\Controller\Welcome;

return [
    /**
     * 
     * Actually :
     * 
     * Values can`t in :
     * 
     * Multiple Paramas 
     * 
     * Ej:
     * 
     * [Home::class,function,param1, parman2...]
     * 
     */
    "home"=>[Home::class],
    "our"=>[Welcome::class],
    "document"=>[Document::class],
    "login"=>[Login::class]
];
