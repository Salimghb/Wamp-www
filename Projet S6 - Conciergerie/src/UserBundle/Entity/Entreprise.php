<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\EntrepriseRepository")
 */
class Entreprise
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
     * @ORM\joinColumn(onDelete="SET NULL")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="Siret", type="bigint")
     */
    private $siret;

    /**
     * @ORM\OneToMany(targetEntity="Salarie", mappedBy="entreprise")
     * @ORM\joinColumn(onDelete="SET NULL")
     */
    private $salaries;

    /**
     * @ORM\OneToMany(targetEntity="ConciergerieBundle\Entity\Abonnement", mappedBy="entreprise", orphanRemoval=true)
     */
    private $abonnements;

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
     * @var int
     *
     * @ORM\Column(name="NbAbo", type="integer")
     */
    private $nbAbo;

    /**
     * @var int
     *
     * @ORM\Column(name="NbSal", type="integer")
     */
    private $nbSal;

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
     * @return Entreprise
     */
    public function setUser($user)
    {
        $this->user = $user;
        $user->setEntreprise($this);
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
     * @return Entreprise
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
     * Set salaries
     *
     * @param array $salaries
     *
     * @return Entreprise
     */
    public function setSalaries($salaries)
    {
        $this->salaries = $salaries;

        return $this;
    }

    /**
     * Get salaries
     *
     * @return array
     */
    public function getSalaries()
    {
        return $this->salaries;
    }

    /**
     * Set abonnements
     *
     * @param array $abonnements
     *
     * @return Entreprise
     */
    public function setAbonnements($abonnements)
    {
        $this->abonnements = $abonnements;

        return $this;
    }

    /**
     * Get abonnements
     *
     * @return array
     */
    public function getAbonnements()
    {
        return $this->abonnements;
    }

    /**
     * Set adresse
     *
     * @param \stdClass $adresse
     *
     * @return Entreprise
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
     * @return Entreprise
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
     * @return Entreprise
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
     * @return Entreprise
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
        $this->salaries    = new \Doctrine\Common\Collections\ArrayCollection();
        $this->abonnements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->nbAbo       = 0;
        $this->nbSal       = 0;
    }

    /**
     * Add salary
     *
     * @param Salarie $salary
     *
     * @return Entreprise
     */
    public function addSalary(Salarie $salary)
    {
        $this->salaries[] = $salary;
        $salary->setEntreprise($this);
        return $this;
    }

    /**
     * Remove salary
     *
     * @param Salarie $salary
     */
    public function removeSalary(Salarie $salary)
    {
        $this->salaries->removeElement($salary);
        $salary->setEntreprise(NULL);
    }

    /**
     * Add abonnement
     *
     * @param \ConciergerieBundle\Entity\Abonnement $abonnement
     *
     * @return Entreprise
     */
    public function addAbonnement(\ConciergerieBundle\Entity\Abonnement $abonnement)
    {
        $this->abonnements[] = $abonnement;
        $this->nbAbo++;
        return $this;
    }

    /**
     * Remove abonnement
     *
     * @param \ConciergerieBundle\Entity\Abonnement $abonnement
     */
    public function removeAbonnement(\ConciergerieBundle\Entity\Abonnement $abonnement)
    {
        $this->abonnements->removeElement($abonnement);
        $this->nbAbo--;
    }

    /**
     * Set nbAbo
     *
     * @param integer $nbAbo
     *
     * @return Entreprise
     */
    public function setNbAbo($nbAbo)
    {
        $this->nbAbo = $nbAbo;

        return $this;
    }

    /**
     * Get nbAbo
     *
     * @return integer
     */
    public function getNbAbo()
    {
        return $this->nbAbo;
    }

    /**
     * Set nbSal
     *
     * @param integer $nbSal
     *
     * @return Entreprise
     */
    public function setNbSal($nbSal)
    {
        $this->nbSal = $nbSal;

        return $this;
    }

    /**
     * Get nbSal
     *
     * @return integer
     */
    public function getNbSal()
    {
        return $this->nbSal;
    }
}
