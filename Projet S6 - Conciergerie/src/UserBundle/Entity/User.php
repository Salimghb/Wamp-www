<?php
// src/UserBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /*On part du principe que l'utilisateur a un attribut qui le spécialise.
    Celui ci lui est attribué lors de l'inscription
    cet attribut peut être un Salarié, si l'utilisateur s'inscrit en tant que salarié, une entreprise...
    Si l'utilisateur n'appartient pas à une catégorie, le champ correspondant sera null
    */

    /**
     * @ORM\OneToOne(targetEntity="Entreprise" , cascade={"persist","remove"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $entreprise;
    
    /**
     * @ORM\OneToOne(targetEntity="Prestataire", cascade={"persist","remove"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $prestataire;

    /**
     * @ORM\OneToOne(targetEntity="Salarie", cascade={"persist","remove"}, orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $salarie;

    

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }



    /**
     * Set entreprise
     *
     * @param Entreprise $entreprise
     *
     * @return User
     */
    public function setEntreprise(Entreprise $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return Entreprise
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set salarie
     *
     * @param Salarie $salarie
     *
     * @return User
     */
    public function setSalarie(Salarie $salarie = null)
    {
        $this->salarie = $salarie;

        return $this;
    }

    /**
     * Get salarie
     *
     * @return Salarie
     */
    public function getSalarie()
    {
        return $this->salarie;
    }

    /**
     * Set prestataire
     *
     * @param Prestataire $prestataire
     *
     * @return User
     */
    public function setPrestataire(Prestataire $prestataire = null)
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    /**
     * Get prestataire
     *
     * @return Prestataire
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }
}
