<?php

namespace ConciergerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement")
 * @ORM\Entity(repositoryClass="ConciergerieBundle\Repository\AbonnementRepository")
 */
class Abonnement
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
     * @var int
     *
     * @ORM\Column(name="dureeAbo", type="integer")
     */
    private $dureeAbo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

    /**
    * @ORM\ManyToOne(targetEntity="Bouquet",inversedBy="abonnements")
    * @ORM\JoinColumn(nullable=false)
    */
    private $bouquet;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Entreprise", inversedBy="abonnements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $entreprise;


    public function __construct()
    {
        $this->dateDebut= new \DateTime('now');
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
     * Set dureeAbo
     *
     * @param integer $dureeAbo
     *
     * @return Abonnement
     */
    public function setDureeAbo($dureeAbo)
    {
        $this->dureeAbo = $dureeAbo;

        return $this;
    }

    /**
     * Get dureeAbo
     *
     * @return int
     */
    public function getDureeAbo()
    {
        return $this->dureeAbo;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Abonnement
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set bouquet
     *
     * @param Bouquet $bouquet
     *
     * @return Abonnement
     */
    public function setBouquet(Bouquet $bouquet)
    {

        
        $this->bouquet = $bouquet;

        return $this;
    }

    /**
     * Get bouquet
     *
     * @return Bouquet
     */
    public function getBouquet()
    {
        return $this->bouquet;
    }

    /**
     * Set entreprise
     *
     * @param \UserBundle\Entity\Entreprise $entreprise
     *
     * @return Abonnement
     */
    public function setEntreprise(\UserBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \UserBundle\Entity\Entreprise
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @ORM\PreUpdate
     * @ORM\PrePersist
     */
    public function updateDate(LifecycleEventArgs $event)
    {
        $this->setDateFin(clone $this->getDateDebut());
        $this->getDateFin()->add(new \DateInterval('P'.$this->getDureeAbo().'M'));

        if ($this -> getDateFin() > new \DateTime('now'))
        {
            $em = $event
            -> getEntityManager();

            $repository = $em
            -> getRepository(get_class($this));

            $em
            -> remove($this);

            $em
            -> flush();
        }

    }


    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Abonnement
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
}
