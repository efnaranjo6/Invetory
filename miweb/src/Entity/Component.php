<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;


/**
* @ORM\Entity
* @ORM\Table(name="Component")
*/
class Component {
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
private $id_component;
/**
* @ORM\Column(type="string")
*/
private $name_component;
/**
* @ORM\Column(type="string")
*/
private $state_component;
/**
* Unidirectional - Many-To-One
*
* @ManyToOne(targetEntity="TypeComponent")
* @JoinColumn(name="id_component_type_component", referencedColumnName="id_typecomponent")
*/
private $TypeComponent;

/**
 * Get the value of id_component
 */
public function getIdComponent()
{
return $this->id_component;
}

/**
 * Set the value of id_component
 */
public function setIdComponent($id_component): self
{
$this->id_component = $id_component;

return $this;
}

/**
 * Get the value of name_component
 */
public function getNameComponent()
{
return $this->name_component;
}

/**
 * Set the value of name_component
 */
public function setNameComponent($name_component): self
{
$this->name_component = $name_component;

return $this;
}

/**
 * Get the value of state_component
 */
public function getStateComponent()
{
return $this->state_component;
}

/**
 * Set the value of state_component
 */
public function setStateComponent($state_component): self
{
$this->state_component = $state_component;

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