<?php


namespace Model;

/**
 * Class Item
 * @package Model
 */
class Form
{
    private $id;
    private $Nom;
    private $Prenom;
    private $Adresse;
    private $Phone;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Formulaire
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     * @return Formulaire
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param mixed $Prenom
     * @return Formulaire
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * @param mixed $Adresse
     * @return Formulaire
     */
    public function setAdresse($Adresse)
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param mixed $Phone
     * @return Formulaire
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

}
