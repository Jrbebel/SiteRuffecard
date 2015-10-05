<?php

namespace Siteruffecarde\GestionuserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $Nom;
    /**
     * @ORM\Column(type="text")
     */
    protected $Prenom;
    /**
     * @ORM\Column(type="date")
     */
    protected $Birthday;
    /**
     * @ORM\Column(type="integer")
     */
    protected $Tel;
    /**
     * @ORM\Column(type="text")
     */
    protected $Adresse;
    /**
     * @ORM\Column(type="text")
     */
    protected $Complement;
    /**
     * @ORM\Column(type="text")
     */
    protected $cdePostal;
    /**
     * @ORM\Column(type="text")
     */
    protected $Ville;
    
    

    public function __construct() {
        parent::__construct();
        // your own logic
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->Birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->Birthday;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->Tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set complement
     *
     * @param string $complement
     *
     * @return User
     */
    public function setComplement($complement)
    {
        $this->Complement = $complement;

        return $this;
    }

    /**
     * Get complement
     *
     * @return string
     */
    public function getComplement()
    {
        return $this->Complement;
    }

    /**
     * Set cdePostal
     *
     * @param string $cdePostal
     *
     * @return User
     */
    public function setCdePostal($cdePostal)
    {
        $this->cdePostal = $cdePostal;

        return $this;
    }

    /**
     * Get cdePostal
     *
     * @return string
     */
    public function getCdePostal()
    {
        return $this->cdePostal;
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
        $this->Ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->Ville;
    }
}
