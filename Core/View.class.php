<?php
namespace App\Core\View

class View 
{
    private $view;
    private $template;
    private $data = [];
    

    public function __construct($view, $template)
    {   
        $this->view = strtolower($view);
        $this->template = strtolower($template);
    }

    public function __destruct()
    {
        include "View/Template/".$this->template.".tpl.php";

    }
}
