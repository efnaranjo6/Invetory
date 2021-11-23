<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
/**
* @ORM\Entity
* @ORM\Table(name="Peripheral")
*/
class Peripheral{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
private $id_peripheral;
/**
* @ORM\Column(type="string")
*/
private $state_peripheral;
/**
* @ORM\Column(type="string")
*/
private $detail_peripheral;
/**
* Unidirectional - Many-To-One
*
* @ManyToOne(targetEntity="TypeComponent")
* @JoinColumn(name="id_type_component", referencedColumnName="id_typecomponent")
*/
private $TypeComponent;


/**
 * Get the value of id_peripheral
 */
public function getIdPeripheral()
{
return $this->id_peripheral;
}

/**
 * Set the value of id_peripheral
 */
public function setIdPeripheral($id_peripheral): self
{
$this->id_peripheral = $id_peripheral;

return $this;
}

/**
 * Get the value of state_peripheral
 */
public function getStatePeripheral()
{
return $this->state_peripheral;
}

/**
 * Set the value of state_peripheral
 */
public function setStatePeripheral($state_peripheral): self
{
$this->state_peripheral = $state_peripheral;

return $this;
}

/**
 * Get the value of detail_peripheral
 */
public function getDetailPeripheral()
{
return $this->detail_peripheral;
}

/**
 * Set the value of detail_peripheral
 */
public function setDetailPeripheral($detail_peripheral): self
{
$this->detail_peripheral = $detail_peripheral;

return $this;
}

/**
 * Get the value of TypeComponent
 */
public function getTypeComponent()
{
return $this->TypeComponent;
}

/**
 * Set the value of TypeComponent
 */
public function setTypeComponent($TypeComponent): self
{
$this->TypeComponent = $TypeComponent;

return $this;
}
}