<?php 

namespace Salim\PlateformeBundle\AntiSpam;


class SalimAntiSpam
{

	private $mailer;
	private $locale;
	private $minLength;


	public function __construct(\Swift_Mailer $mailer, $locale, $minlength)
	{
		
		$this->mailer    = $mailer;
		$this->locale    = $locale;
		$this->minLength = (int) $minlength;

	}


	public function isSpam($text)
	{

		return strlen($text) < $this->minLength;

	}

}