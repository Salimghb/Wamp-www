<?php 

namespace Salim\PlateformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application")
 * @ORM\Entity(repositoryClass="Salim\PlateformeBundle\Repository\ApplicationRepository")
 */

class Application
{

    /**
     * @ORM\ManyToOne(targetEntity = "Salim\PlateformeBundle\Entity\Advert")
     * @ORM\JoinColumn(nullable=false)
     */
    private $advert;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *@ORM\Column(name="author",type="string",length=255) 
     */
    private $author;

    /**
     *@ORM\Column(name="content",type="text") 
     */
    private $content;

    /**
     *@ORM\Column(name="date",type="datetime") 
     */
    private $date;

    public function __construct()
    {

    	$this->date = new \Datetime();

    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Application
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Application
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Application
     */
    public function setDate(\Datetime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set advert
     *
     * @param \Salim\PlateformeBundle\Entity\Advert $advert
     *
     * @return Application
     */
    public function setAdvert(\Salim\PlateformeBundle\Entity\Advert $advert)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \Salim\PlateformeBundle\Entity\Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }
}
