<?php

namespace ConciergerieBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Bouquet
 *
 * @ORM\Table(name="bouquet")
 * @ORM\Entity(repositoryClass="ConciergerieBundle\Repository\BouquetRepository")
 */
class Bouquet
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
     * @var float
     *
     * @ORM\Column(name="tarif", type="float")
     */
    private $tarif;

    /**
     * @ORM\ManyToMany(targetEntity="TypeService", mappedBy="bouquets")
     */
    private $typesService;

    /**
     * @ORM\OneToMany(targetEntity="Abonnement", mappedBy="bouquet", orphanRemoval=true)
     */
    private $abonnements;


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
     * @return Bouquet
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
     * Set tarif
     *
     * @param integer $tarif
     *
     * @return Bouquet
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return int
     */
    public function getTarif()
    {
        return $this->tarif;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typesService = new ArrayCollection();
    }

    /**
     * Add typesService
     *
     * @param TypeService $typesService
     *
     * @return Bouquet
     */
    public function addTypesService(TypeService $typesService)
    {
        $this->typesService[] = $typesService;
        $typesService->addBouquet($this);
        return $this;
    }

    /**
     * Remove typesService
     *
     * @param TypeService $typesService
     */
    public function removeTypesService(TypeService $typesService)
    {
        $this->typesService->removeElement($typesService);
        $typesService->removeBouquet($this);
    }

    /**
     * Get typesService
     *
     * @return Collection
     */
    public function getTypesService()
    {
        return $this->typesService;
    }

    /**
     * Add abonnement
     *
     * @param Abonnement $abonnement
     *
     * @return Bouquet
     */
    public function addAbonnement(Abonnement $abonnement)
    {
        $this->abonnements[] = $abonnement;

        return $this;
    }

    /**
     * Remove abonnement
     *
     * @param Abonnement $abonnement
     */
    public function removeAbonnement(Abonnement $abonnement)
    {
        $this->abonnements->removeElement($abonnement);
    }

    /**
     * Get abonnements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbonnements()
    {
        return $this->abonnements;
    }
}
