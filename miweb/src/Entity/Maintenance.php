<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
/**
* @ORM\Entity
* @ORM\Table(name="Maintenance")
*/
class Maintenance{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
private $id_maintenance;
/**
* @ORM\Column(type="string")
*/
private $state_maintenance;
/**
* @ORM\Column(type="string")
*/
private $detail_maintenance;
/**
* @ORM\Column(type="string")
*/
private $soft_maintenance;
/**
* @ORM\Column(type="string")
*/
private $hard_maintenance;
/**
* @ORM\Column(type="string")
*/
private $description_maintenance;
/**
* @ORM\Column(type="date")
*/
private $date_maintenance;
/**
* Unidirectional - Many-To-One
*
* @ManyToOne(targetEntity="Element")
* @JoinColumn(name="id_element_maintenance", referencedColumnName="id_element")
*/
private $Element;


/**
 * Get the value of id_maintenance
 */
public function getIdMaintenance()
{
return $this->id_maintenance;
}

/**
 * Set the value of id_maintenance
 */
public function setIdMaintenance($id_maintenance): self
{
$this->id_maintenance = $id_maintenance;

return $this;
}

/**
 * Get the value of state_maintenance
 */
public function getStateMaintenance()
{
return $this->state_maintenance;
}

/**
 * Set the value of state_maintenance
 */
public function setStateMaintenance($state_maintenance): self
{
$this->state_maintenance = $state_maintenance;

return $this;
}

/**
 * Get the value of detail_maintenance
 */
public function getDetailMaintenance()
{
return $this->detail_maintenance;
}

/**
 * Set the value of detail_maintenance
 */
public function setDetailMaintenance($detail_maintenance): self
{
$this->detail_maintenance = $detail_maintenance;

return $this;
}

/**
 * Get the value of soft_maintenance
 */
public function getSoftMaintenance()
{
return $this->soft_maintenance;
}

/**
 * Set the value of soft_maintenance
 */
public function setSoftMaintenance($soft_maintenance): self
{
$this->soft_maintenance = $soft_maintenance;

return $this;
}

/**
 * Get the value of hard_maintenance
 */
public function getHardMaintenance()
{
return $this->hard_maintenance;
}

/**
 * Set the value of hard_maintenance
 */
public function setHardMaintenance($hard_maintenance): self
{
$this->hard_maintenance = $hard_maintenance;

return $this;
}

/**
 * Get the value of description_maintenance
 */
public function getDescriptionMaintenance()
{
return $this->description_maintenance;
}

/**
 * Set the value of description_maintenance
 */
public function setDescriptionMaintenance($description_maintenance): self
{
$this->description_maintenance = $description_maintenance;

return $this;
}

/**
 * Get the value of date_maintenance
 */
public function getDateMaintenance()
{
return $this->date_maintenance;
}

/**
 * Set the value of date_maintenance
 */
public function setDateMaintenance($date_maintenance): self
{
$this->date_maintenance = $date_maintenance;

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
}