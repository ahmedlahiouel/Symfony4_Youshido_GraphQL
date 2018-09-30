<?php

namespace test\userBundle\Entity;


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

    public function __construct()
    {
        parent::__construct();
        $this->date = new \DateTime();
        // your own logic
    }

    /**
     * Random string
     * @ORM\Column(name="prenom", type="string", length=255)
     * @var string
     */
    protected $prenom;
    /**
     * Random string
     * @ORM\Column(name="secteur", type="string", length=255)
     * @var string
     */
    protected $secteur;
    /**
     * Random date
     * @ORM\Column(name="date", type="date")
     * @var string
     */
    protected $date;
    /**
     * Random string
     * @ORM\Column(name="ville", type="string", length=255)
     * @var string
     */
    protected $ville;
    /**
     * Random string
     * @ORM\Column(name="tl", type="string", length=255)
     * @var string
     */
    protected $tl;
    /**
     * Random string
     * @ORM\Column(name="pays", type="string", length=255)
     * @var string
     */
    protected $pays;


    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
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
     * Set secteur
     *
     * @param string $secteur
     *
     * @return User
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return string
     */
    public function getSecteur()
    {
        return $this->secteur;
    }


    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tl
     *
     * @param string $tl
     *
     * @return User
     */
    public function setTl($tl)
    {
        $this->tl = $tl;

        return $this;
    }

    /**
     * Get tl
     *
     * @return string
     */
    public function getTl()
    {
        return $this->tl;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return User
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return User
     */
    public function setDate($date)
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
}
