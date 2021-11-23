<?php

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="TypeComponent")
*/
class TypeComponent {
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
private $id_typecomponent;
/**
* @ORM\Column(type="string")
*/
private $name_typecomponent;
/**
* @ORM\Column(type="string")
*/
private $state_typecomponent;



/**
 * Get the value of id_typecomponent
 */
public function getIdTypecomponent()
{
return $this->id_typecomponent;
}

/**
 * Set the value of id_typecomponent
 */
public function setIdTypecomponent($id_typecomponent): self
{
$this->id_typecomponent = $id_typecomponent;

return $this;
}

/**
 * Get the value of name_typecomponent
 */
public function getNameTypecomponent()
{
return $this->name_typecomponent;
}

/**
 * Set the value of name_typecomponent
 */
public function setNameTypecomponent($name_typecomponent): self
{
$this->name_typecomponent = $name_typecomponent;

return $this;
}

/**
 * Get the value of state_typecomponent
 */
public function getStateTypecomponent()
{
return $this->state_typecomponent;
}

/**
 * Set the value of state_typecomponent
 */
public function setStateTypecomponent($state_typecomponent): self
{
$this->state_typecomponent = $state_typecomponent;

return $this;
}
}