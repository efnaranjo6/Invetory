<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\UniqueConstraint;


/**
* @ORM\Entity
* @ORM\Table(name="Person",uniqueConstraints={
* @UniqueConstraint(name="unique_name",columns={"codeid_person"})
* }))
*/
class Person {
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
private $id_person;
/**
* @ORM\Column(type="string")
*/
private $name_person;
/**
* @ORM\Column(type="string")
*/
private $lastname_person;
/**
* @ORM\Column(type="string")
*/
private $codeid_person;
/**
* @ORM\Column(type="string")
*/
private $dateborn_person;
/**
* @ORM\Column(type="string",options={"default": "ACTIVE"})
*/
private $state_person;
/**
* Unidirectional - Many-To-One
*
* @ManyToOne(targetEntity="Departament")
* @JoinColumn(name="id_person_departament", referencedColumnName="id_departament")
*/
private $Departament;

/**
 * Get the value of id_person
 */
public function __construct()
{
$this->state_person= 'ACTIVE';
$this->Departament=new ArrayCollection();
}
public function getIdPerson()
{
return $this->id_person;
}

/**
 * Set the value of id_person
 */
public function setIdPerson($id_person): self
{
$this->id_person = $id_person;

return $this;
}

/**
 * Get the value of name_person
 */
public function getNamePerson()
{
return $this->name_person;
}

/**
 * Set the value of name_person
 */
public function setNamePerson($name_person): self
{
$this->name_person = $name_person;

return $this;
}

/**
 * Get the value of lastname_person
 */
public function getLastnamePerson()
{
return $this->lastname_person;
}

/**
 * Set the value of lastname_person
 */
public function setLastnamePerson($lastname_person): self
{
$this->lastname_person = $lastname_person;

return $this;
}

/**
 * Get the value of state_person
 */
public function getStatePerson()
{
return $this->state_person;
}

/**
 * Set the value of state_person
 */
public function setStatePerson($state_person): self
{
$this->state_person = $state_person;

return $this;
}

/**
 * Get the value of Departament
 */
public function getDepartament()
{
return $this->Departament;
}

/**
 * Set the value of Departament
 */
public function setDepartament($Departament): self
{
$this->Departament = $Departament;

return $this;
}

/**
 * Get the value of codeid_person
 */
public function getCodeidPerson()
{
return $this->codeid_person;
}

/**
 * Set the value of codeid_person
 */
public function setCodeidPerson($codeid_person): self
{
$this->codeid_person = $codeid_person;

return $this;
}

/**
 * Get the value of dateborn_person
 */
public function getDatebornPerson()
{
return $this->dateborn_person;
}

/**
 * Set the value of dateborn_person
 */
public function setDatebornPerson($dateborn_person): self
{
$this->dateborn_person = $dateborn_person;

return $this;
}
}