<?php

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="Departament")
*/
class Departament{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id_departament;
    /**
    * @ORM\Column(type="string")
    */
    private $state_departament;
    /**
    * @ORM\Column(type="string")
    */
    private $name_departament;
    

    /**
     * Get the value of id_departament
     */
    public function getIdDepartament()
    {
        return $this->id_departament;
    }

    /**
     * Set the value of id_departament
     */
    public function setIdDepartament($id_departament): self
    {
        $this->id_departament = $id_departament;

        return $this;
    }

    /**
     * Get the value of state_departament
     */
    public function getStateDepartament()
    {
        return $this->state_departament;
    }

    /**
     * Set the value of state_departament
     */
    public function setStateDepartament($state_departament): self
    {
        $this->state_departament = $state_departament;

        return $this;
    }

    /**
     * Get the value of name_departament
     */
    public function getNameDepartament()
    {
        return $this->name_departament;
    }

    /**
     * Set the value of name_departament
     */
    public function setNameDepartament($name_departament): self
    {
        $this->name_departament = $name_departament;

        return $this;
    }
}