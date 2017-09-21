<?php

namespace ConciergerieBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TypeService
 *
 * @ORM\Table(name="type_service")
 * @ORM\Entity(repositoryClass="ConciergerieBundle\Repository\TypeServiceRepository")
 */
class TypeService
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="Service", mappedBy="type")
     */
    private $services;

    /**
     * @ORM\ManyToMany(targetEntity="Bouquet", inversedBy="typesService")
     * @ORM\JoinColumn(nullable=false)
     * @ORM\JoinTable(name="contenu_bouquet")
     */
    private $bouquets;




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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return TypeService
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->services = new ArrayCollection();
    }

    /**
     * Add service
     *
     * @param Service $service
     *
     * @return TypeService
     */
    public function addService(Service $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param Service $service
     */
    public function removeService(Service $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Get services
     *
     * @return Collection
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Add bouquet
     *
     * @param Bouquet $bouquet
     *
     * @return TypeService
     */
    public function addBouquet(Bouquet $bouquet)
    {
        $this->bouquets[] = $bouquet;

        return $this;
    }

    /**
     * Remove bouquet
     *
     * @param Bouquet $bouquet
     */
    public function removeBouquet(Bouquet $bouquet)
    {
        $this->bouquets->removeElement($bouquet);
    }

    /**
     * Get bouquets
     *
     * @return Collection
     */
    public function getBouquets()
    {
        return $this->bouquets;
    }
}
