<?php 

namespace App\Controller; 

//use App\Core\View;
include "Core/View.class.php";

class Error 
{
    public function error404() 
    {
        $view = new View("404","front");
    }

}