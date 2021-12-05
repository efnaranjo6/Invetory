<?php

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="TypeElement")
*/
class TypeElement{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id_type;
    /**
    * @ORM\Column(type="string")
    */
    private $state_type;
    /**
    * @ORM\Column(type="string")
    */
    private $name_type;
    public function __construct()
    {
    $this->state_type= 'ACTIVE';
    }

    /**
     * Get the value of id_type
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * Set the value of id_type
     */
    public function setIdType($id_type): self
    {
        $this->id_type = $id_type;

        return $this;
    }

    /**
     * Get the value of state_type
     */
    public function getStateType()
    {
        return $this->state_type;
    }

    /**
     * Set the value of state_type
     */
    public function setStateType($state_type): self
    {
        $this->state_type = $state_type;

        return $this;
    }

    /**
     * Get the value of name_type
     */
    public function getNameType()
    {
        return $this->name_type;
    }

    /**
     * Set the value of name_type
     */
    public function setNameType($name_type): self
    {
        $this->name_type = $name_type;

        return $this;
    }
}