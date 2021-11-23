<?php
// src/Trademark.php
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Trademark")
*/
class Trademark
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id_trademark;
    /**
    * @ORM\Column(type="string")
    */
    private $name_trademark;
    /**
    * @ORM\Column(type="string", options={"default": "ACTIVE"})
    */
    private $state_trademark;

    public function __construct()
    {
    $this->state_trademark= 'ACTIVE';
    }



    /**
    * Get the value of id_trademark
    */
    public function getIdTrademark()
    {
        return $this->id_trademark;
    }
    /**
     * Set the value of id_trademark
     */
    public function setIdTrademark($id_trademark): self
    {
        $this->id_trademark = $id_trademark;

        return $this;
    }
    /**
     * Get the value of name_trademark
     */
    public function getNameTrademark()
    {
        return $this->name_trademark;
    }
    /**
     * Set the value of name_trademark
     */
    public function setNameTrademark($name_trademark): self
    {
        $this->name_trademark = $name_trademark;

        return $this;
    }
    /**
    * Get the value of name_trademark
    */
    public function getStateTrademark()
    {
    return $this->state_trademark;
    }
    /**
    * Set the value of name_trademark
    */
    public function setStateTrademark($state_trademark): self
    {
    $this->state_trademark = $state_trademark;

    return $this;
    }
}