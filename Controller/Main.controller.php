<?php 

namespace App\Controller; 

use App\Core\Mailer;
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

	public function academie_heroique()
	{
		$view = new View("academie_heroique","front");
	}

    public function veille_technologique() 
    {
        $view = new View("veille_technologique","front");
    }

    public function contact() 
    {
		$messageError 	= "";
		$process		= true;

		/* If a contact form is sent to the server, the information entered is verified */
        if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]) )
        {
			/* Escaping special characters in HTML */
            $contactName        = htmlspecialchars($_POST["name"]);
            $contactEmail       = htmlspecialchars($_POST["email"]);
            $contactContent    	= htmlspecialchars($_POST["message"]);

			/* Verification of the information entered */
			if (strlen($contactName) < 3)
			{
				$messageError	= "Le nom saisie est trop court.";
				$process 		= false;
			}
			else if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL))
			{
				$messageError	= "L'adresse mail saisie n'est pas valide.";
				$process 		= false;
			}
			else if (strlen($contactContent) < 20)
			{
				$messageError	= "Le contenu du message est trop court.";
				$process 		= false;
			}

			/* The mail is sent if the information entered is correct */
			if ($process)
			{
				$mail = new Mailer();
				$mail->prepareContentGetFrom(
					$_POST["email"],
					$_POST["name"],
					"Envoyé par ".$_POST["name"]." <".$_POST["email"].">",
					$_POST["message"],
					$_POST["message"]
				);
				$mail->send();
			}
        }

		if (!$process)
			$_SESSION["error"] = $messageError;

        $view = new View("contact","front");
    }

    public function a_propos() 
    {
        $view = new View("a_propos","front");

    }
}


