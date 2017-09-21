<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestataire
 *
 * @ORM\Table(name="prestataire")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\PrestataireRepository")
 */
class Prestataire
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
     * @ORM\OneToOne(targetEntity="User", cascade={"persist"})
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="Siret", type="bigint")
     */
    private $siret;

    /**
     * @ORM\OneToMany(targetEntity="ConciergerieBundle\Entity\Service", cascade={"remove"},mappedBy="prestataire", orphanRemoval=true)
     * @ORM\joinColumn(onDelete="SET NULL")
     */
    private $services;

    /**
     * @ORM\OneToOne(targetEntity="Adresse", cascade={"persist"}, orphanRemoval=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Responsable", type="string", length=255)
     */
    private $responsable;

    /**
     * @var int
     *
     * @ORM\Column(name="Telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Site", type="string", length=255, nullable=true)
     */
    private $site;


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
     * Set user
     *
     * @param \stdClass $user
     *
     * @return Prestataire
     */
    public function setUser($user)
    {
        $this->user = $user;
        $user->setPrestataire($this);
        return $this;
    }

    /**
     * Get user
     *
     * @return \stdClass
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set siret
     *
     * @param integer $siret
     *
     * @return Prestataire
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return int
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set services
     *
     * @param array $services
     *
     * @return Prestataire
     */
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get services
     *
     * @return array
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set adresse
     *
     * @param \stdClass $adresse
     *
     * @return Prestataire
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \stdClass
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     *
     * @return Prestataire
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Prestataire
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Prestataire
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add service
     *
     * @param \ConciergerieBundle\Entity\Service $service
     *
     * @return Prestataire
     */
    public function addService(\ConciergerieBundle\Entity\Service $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \ConciergerieBundle\Entity\Service $service
     */
    public function removeService(\ConciergerieBundle\Entity\Service $service)
    {
        $this->services->removeElement($service);
    }
}
