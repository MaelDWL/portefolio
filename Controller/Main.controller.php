<?php 

namespace App\Controller; 

use App\Core\View;

class main 
{
    public function accueil() 
    {
        $view = new View("accueil","front");
    }

}

