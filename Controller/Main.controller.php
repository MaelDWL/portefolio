<?php 

namespace App\Controller; 

//use App\Core\View;

include "Core/View.class.php";

class Main 
{
    public function accueil() 
    {
        $view = new View("accueil","front");
    }

}

