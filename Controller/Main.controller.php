<?php 

namespace App\Controller; 

use App\Core\View;

class Main 
{
    public function accueil() 
    {
        $view = new View("accueil","front");
    }

    public function entreprise() 
    {
        $view = new View("entreprise","front");
    }

    public function realisations_professionelles() 
    {
        $view = new View("realisations_professionelles","front");
    }

    public function veille_technologique() 
    {
        $view = new View("veille_technologique","front");
    }

    public function contact() 
    {
        $view = new View("contact","front");
    }

    public function a_propos() 
    {
        $view = new View("a_propos","front");
    }
}

