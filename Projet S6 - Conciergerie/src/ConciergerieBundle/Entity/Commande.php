<?php

namespace ConciergerieBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="ConciergerieBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="complements", type="text", nullable=true)
     */
    private $complements;

    /**
     * @var boolean
     *
     * @ORM\Column(name="payed", type="boolean")
     */
    private $payed;

    /**
     * @ORM\ManyToOne(targetEntity="EtatCommande", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Service", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Salarie", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $salarie;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set complements
     *
     * @param string $complements
     *
     * @return Commande
     */
    public function setComplements($complements)
    {
        $this->complements = $complements;

        return $this;
    }

    /**
     * Get complements
     *
     * @return string
     */
    public function getComplements()
    {
        return $this->complements;
    }

    /**
     * Set payed
     *
     * @param boolean $payed
     *
     * @return Commande
     */
    public function setPayed($payed)
    {
        $this->payed = $payed;

        return $this;
    }

    /**
     * Get payed
     *
     * @return boolean
     */
    public function getPayed()
    {
        return $this->payed;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etat
     *
     * @param EtatCommande $etat
     *
     * @return Commande
     */
    public function setEtat(EtatCommande $etat)
    {
        $this->etat = $etat;
        $etat->addCommande($this);
        return $this;
    }

    /**
     * Get etat
     *
     * @return EtatCommande
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set Service
     *
     * @param Service $service
     *
     * @return Commande
     */
    public function setService(Service $service)
    {
        $this->service = $service;
        $service->addCommande($this);
        return $this;
    }

    /**
     * Get services
     *
     * @return Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set salarie
     *
     * @param \UserBundle\Entity\Salarie $salarie
     *
     * @return Commande
     */
    public function setSalarie(\UserBundle\Entity\Salarie $salarie)
    {
        $this->salarie = $salarie;
        $salarie->addCommande($this);
        return $this;
    }

    /**
     * Get salarie
     *
     * @return \UserBundle\Entity\Salarie
     */
    public function getSalarie()
    {
        return $this->salarie;
    }

    // Constructor qui initialise la date au moment de la commande
    public function __construct()
    {
      $this->date = new \Datetime();
      $this->payed = false;
  }
}
