<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="salarie")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\SalarieRepository")
 */
class Salarie
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
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexe", type="string", length=1)
     */
    private $sexe;

    /**
    * @ORM\OneToOne(targetEntity="Adresse", cascade={"persist"}, orphanRemoval=true)
    */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="Telephone", type="integer")
     */
    private $telephone;

    /**
     * @ORM\ManyToOne(targetEntity="Entreprise", inversedBy="salaries")
     * @ORM\JoinColumn(nullable=true)
     */
    private $entreprise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date")
     */
    private $dateNaissance;

    /**
   * @ORM\OneToMany(targetEntity="ConciergerieBundle\Entity\Commande", mappedBy="salarie", orphanRemoval=true)
   */
    private $commandes;

    /**
   * @ORM\OneToMany(targetEntity="ConciergerieBundle\Entity\Commentaire", mappedBy="salarie", orphanRemoval=true)
   */
    private $commentaires;



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
     * Set sexe
     *
     * @param binary $sexe
     *
     * @return Salarie
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return binary
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set adresse
     *
     * @param \stdClass $adresse
     *
     * @return Salarie
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
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Salarie
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
     * Set entreprise
     *
     * @param \stdClass $entreprise
     *
     * @return Salarie
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \stdClass
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Salarie
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set commandes
     *
     * @param array $commandes
     *
     * @return Salarie
     */
    public function setCommandes($commandes)
    {
        $this->commandes = $commandes;

        return $this;
    }

    /**
     * Get commandes
     *
     * @return array
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Set commentaires
     *
     * @param array $commentaires
     *
     * @return Salarie
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return array
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set user
     *
     * @param \stdClass $user
     *
     * @return Salarie
     */
    public function setUser($user)
    {
        $this->user = $user;
        $user->setSalarie($this);
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Salarie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Salarie
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commande
     *
     * @param \ConciergerieBundle\Entity\Commande $commande
     *
     * @return Salarie
     */
    public function addCommande(\ConciergerieBundle\Entity\Commande $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \ConciergerieBundle\Entity\Commande $commande
     */
    public function removeCommande(\ConciergerieBundle\Entity\Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Add commentaire
     *
     * @param \ConciergerieBundle\Entity\Commentaire $commentaire
     *
     * @return Salarie
     */
    public function addCommentaire(\ConciergerieBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;

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
    }
}
