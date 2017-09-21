<?php 

namespace Salim\PlateformeBundle\Email;

use Salim\PlateformeBundle\Entity\Application;

class ApplicationMailer
{

	/**
	 * @var \Swift_Mailer
	 */
	private $mailer;

	public function __construct(\Swift_Mailer $mailer)
	{
		$this -> mailer = $mailer;
	}

	public function sendNewNotification (Application $application)
	{
		$message = new \Swift_Message(
			"Nouvelle candidature",
			"Vous avez reçu une nouvelle candidature"
			);
		
		$message
		//Adresse de reception
		-> addTo('sghbabra@hotmail.fr'/*$application->getAdvert()->getAuthor()->getEmail()*/)
		//Adresse d'emission
		-> addFrom('ghbabrasalim@gmail.com');

		$this->mailer->send($message);

	}



}