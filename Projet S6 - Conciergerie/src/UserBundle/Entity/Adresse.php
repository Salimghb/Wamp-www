<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\AdresseRepository")
 */
class Adresse
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
     * @ORM\Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var int
     *
     * @ORM\Column(name="numAppart", type="integer", nullable=true)
     */
    private $numAppart;

    /**
     * @var int
     *
     * @ORM\Column(name="etage", type="integer", nullable=true)
     */
    private $etage;

    /**
     * @var string
     *
     * @ORM\Column(name="complements", type="text", nullable=true)
     */
    private $complements;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this -> id;
    }

    /**
     * Set num
     *
     * @param integer $num
     *
     * @return Adresse
     */
    public function setNum($num)
    {
        $this -> num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return int
     */
    public function getNum()
    {
        return $this -> num;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return Adresse
     */
    public function setRue($rue)
    {
        $this -> rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this -> rue;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this -> ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this -> ville;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Adresse
     */
    public function setCodePostal($codePostal)
    {
        $this -> codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this -> codePostal;
    }

    /**
     * Set numAppart
     *
     * @param integer $numAppart
     *
     * @return Adresse
     */
    public function setNumAppart($numAppart)
    {
        $this -> numAppart = $numAppart;

        return $this;
    }

    /**
     * Get numAppart
     *
     * @return int
     */
    public function getNumAppart()
    {
        return $this -> numAppart;
    }

    /**
     * Set etage
     *
     * @param integer $etage
     *
     * @return Adresse
     */
    public function setEtage($etage)
    {
        $this -> etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return int
     */
    public function getEtage()
    {
        return $this -> etage;
    }

    /**
     * Set complements
     *
     * @param string $complements
     *
     * @return Adresse
     */
    public function setComplements($complements)
    {
        $this -> complements = $complements;

        return $this;
    }

    /**
     * Get complements
     *
     * @return string
     */
    public function getComplements()
    {
        return $this -> complements;
    }
}
