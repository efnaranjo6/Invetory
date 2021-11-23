<?php

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Acquisition")
*/
class Acquisition{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
private $id_acquisition;
/**
* @ORM\Column(type="string")
*/
private $name_acquisition;


/**
 * Get the value of id_acquisition
 */
public function getIdAcquisition()
{
return $this->id_acquisition;
}

/**
 * Set the value of id_acquisition
 */
public function setIdAcquisition($id_acquisition): self
{
$this->id_acquisition = $id_acquisition;

return $this;
}

/**
 * Get the value of name_acquisition
 */
public function getNameAcquisition()
{
return $this->name_acquisition;
}

/**
 * Set the value of name_acquisition
 */
public function setNameAcquisition($name_acquisition): self
{
$this->name_acquisition = $name_acquisition;

return $this;
}
}