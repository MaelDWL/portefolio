<?php 

namespace App\Controller; 

use App\Core\View;

class Main 
{
    public function accueil() 
    {
        $view = new View("accueil","front");
    }

}

