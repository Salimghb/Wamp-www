<?php

namespace ConciergerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="ConciergerieBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    /**
     * @ORM\ManyToOne(targetEntity="Service", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Salarie", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $salarie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\DateTime()
     */
    private $date;

    //Constructeur
    public function __construct()
    {
        $this->date = new \Datetime();
        $this->published = false;
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Commentaire
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Commentaire
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set service
     *
     * @param Service $service
     *
     * @return Commentaire
     */
    public function setService(Service $service)
    {
        $this->service = $service;
        $service->addCommentaire($this);
        return $this;
    }

    /**
     * Get service
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
     * @return Commentaire
     */
    public function setSalarie(\UserBundle\Entity\Salarie $salarie)
    {
        $this->salarie = $salarie;
        $salarie->addCommentaire($this);
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

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
      $this->date = $date;
  }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      return $this->date;
  }

}
