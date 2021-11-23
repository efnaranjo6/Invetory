<?php


use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
/**
* @ORM\Entity
* @ORM\Table(name="AssignmentElement")
*/
class AssignmentElement{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
private $id_assignment;
/**
* @ORM\Column(type="string")
*/
private $state_assignment;
/**
* @ORM\Column(type="date")
*/
private $date_start_maintenance;
/**
* @ORM\Column(type="date")
*/
private $date_end_maintenance;
/**
* Unidirectional - Many-To-One
*
* @ManyToOne(targetEntity="Element")
* @JoinColumn(name="id_element_assignment", referencedColumnName="id_element")
*/
private $Element;
/**
* Unidirectional - Many-To-One
*
* @ManyToOne(targetEntity="Person")
* @JoinColumn(name="id_Person_assignment", referencedColumnName="id_person")
*/
private $Person;


/**
 * Get the value of id_assignment
 */
public function getIdAssignment()
{
return $this->id_assignment;
}

/**
 * Set the value of id_assignment
 */
public function setIdAssignment($id_assignment): self
{
$this->id_assignment = $id_assignment;

return $this;
}

/**
 * Get the value of state_assignment
 */
public function getStateAssignment()
{
return $this->state_assignment;
}

/**
 * Set the value of state_assignment
 */
public function setStateAssignment($state_assignment): self
{
$this->state_assignment = $state_assignment;

return $this;
}

/**
 * Get the value of date_start_maintenance
 */
public function getDateStartMaintenance()
{
return $this->date_start_maintenance;
}

/**
 * Set the value of date_start_maintenance
 */
public function setDateStartMaintenance($date_start_maintenance): self
{
$this->date_start_maintenance = $date_start_maintenance;

return $this;
}

/**
 * Get the value of date_end_maintenance
 */
public function getDateEndMaintenance()
{
return $this->date_end_maintenance;
}

/**
 * Set the value of date_end_maintenance
 */
public function setDateEndMaintenance($date_end_maintenance): self
{
$this->date_end_maintenance = $date_end_maintenance;

return $this;
}

/**
 * Get the value of Element
 */
public function getElement()
{
return $this->Element;
}

/**
 * Set the value of Element
 */
public function setElement($Element): self
{
$this->Element = $Element;

return $this;
}

/**
 * Get the value of Person
 */
public function getPerson()
{
return $this->Person;
}

/**
 * Set the value of Person
 */
public function setPerson($Person): self
{
$this->Person = $Person;

return $this;
}
}