<?php

namespace ConciergerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="ConciergerieBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="libelle", type="string", length=500)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif", type="float")
     */
    private $tarif;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="TypeService", inversedBy="services")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="Commande",cascade={"remove"}, mappedBy="service")
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $commandes;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Prestataire", inversedBy="services")
     * @ORM\JoinColumn(nullable=false)
     */
    private $prestataire;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="service", orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $commentaires;

    /**
      * @ORM\Column(name="nbCommentaires", type="integer")
      */
    private $nbCommentaires = 0;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandes = new ArrayCollection();
        $this->setNbCommentaires(0);
    }


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
     * @return Service
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
     * @param float $tarif
     *
     * @return Service
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return float
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Service
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    

    /**
     * Set type
     *
     * @param TypeService $type
     *
     * @return Service
     */
    public function setType(TypeService $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return TypeService
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add commande
     *
     * @param Commande $commande
     *
     * @return Service
     */
    public function addCommande(Commande $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param Commande $commande
     */
    public function removeCommande(Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Set prestataire
     *
     * @param \UserBundle\Entity\Prestataire $prestataire
     *
     * @return Service
     */
    public function setPrestataire(\UserBundle\Entity\Prestataire $prestataire)
    {
        $this->prestataire = $prestataire;
        $prestataire->addService($this);
        return $this;
    }

    /**
     * Get prestataire
     *
     * @return \UserBundle\Entity\Prestataire
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }


    /**
     * Add commentaire
     *
     * @param \ConciergerieBundle\Entity\Commentaire $commentaire
     *
     * @return Service
     */
    public function addCommentaire(\ConciergerieBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;
        //On incrémente le nb de commentaires
        $this->nbCommentaires++;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \ConciergerieBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\ConciergerieBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
        //On décrémente le nb de commentaires
        $this->nbCommentaires--;
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set nbCommentaires
     *
     * @param integer $nbCommentaires
     *
     * @return Service
     */
    public function setNbCommentaires($nbCommentaires)
    {
        $this->nbCommentaires = $nbCommentaires;

        return $this;
    }

    /**
     * Get nbCommentaires
     *
     * @return integer
     */
    public function getNbCommentaires()
    {
        return $this->nbCommentaires;
    }
}
