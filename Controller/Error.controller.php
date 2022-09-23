<?php 

namespace App\Controller; 

use App\Core\View;

class main 
{
    public function error404() 
    {
        $view = new View("404","front") 
    }

}