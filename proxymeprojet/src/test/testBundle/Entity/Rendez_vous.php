<?php

namespace test\testBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rendez_vous
 *
 * @ORM\Table(name="rendez_vous")
 * @ORM\Entity(repositoryClass="test\testBundle\Repository\Rendez_vousRepository")
 */
class Rendez_vous
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    /**
     * @ORM\ManyToOne(targetEntity="test\userBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id",onDelete="cascade")
     */
    private $user;
    /**
     * @ORM\ManyToOne(targetEntity="test\userBundle\Entity\User")
     * @ORM\JoinColumn(name="id_usersoc",referencedColumnName="id",onDelete="cascade")
     */
    private $usersoc;
    /**
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumn(name="id_offre",referencedColumnName="id",onDelete="cascade")
     */
    private $offre;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Rendez_vous
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

    /**
     * Set user
     *
     * @param \test\userBundle\Entity\User $user
     *
     * @return Rendez_vous
     */
    public function setUser(\test\userBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \test\userBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set offre
     *
     * @param \test\testBundle\Entity\Offre $offre
     *
     * @return Rendez_vous
     */
    public function setOffre(\test\testBundle\Entity\Offre $offre = null)
    {
        $this->offre = $offre;

        return $this;
    }

    /**
     * Get offre
     *
     * @return \test\testBundle\Entity\Offre
     */
    public function getOffre()
    {
        return $this->offre;
    }

    /**
     * Set usersoc
     *
     * @param \test\userBundle\Entity\User $usersoc
     *
     * @return Rendez_vous
     */
    public function setUsersoc(\test\userBundle\Entity\User $usersoc = null)
    {
        $this->usersoc = $usersoc;

        return $this;
    }

    /**
     * Get usersoc
     *
     * @return \test\userBundle\Entity\User
     */
    public function getUsersoc()
    {
        return $this->usersoc;
    }
}
