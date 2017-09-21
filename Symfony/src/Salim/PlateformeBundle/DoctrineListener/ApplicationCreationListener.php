<?php 

namespace Salim\PlateformeBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Salim\PlateformeBundle\Email\ApplicationMailer;
use Salim\PlateformeBundle\Entity\Application;


class ApplicationCreationListener
{

	/**
	 *  @var ApplicationMailer
	 */
	private $applicationMailer;

	public function __construct(ApplicationMailer $AM)
	{
		$this->applicationMailer=$AM;
	}

	public function postPersist (LifecycleEventArgs $args)
	{
		//$entity est l'objet sur lequel l'evenement se produit
		$entity = $args->getObject();

		// Filtre d'envoi de mail : Si $entity n'est pas
		// une application alors on sort de la méthode dans rien faire
		if (!$entity instanceof Application)
		{
			return;
		}

		// Si $entity est une application alors on envoie la notification
		$this->applicationMailer->sendNewNotification($entity);

	}
}




