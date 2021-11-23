<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;


/**
* @ORM\Entity
* @ORM\Table(name="Element")
*/
class Element {
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
private $id_element;
/**
* @ORM\Column(type="string")
*/
private $model_element;
/**
* @ORM\Column(type="string")
*/
private $serial_element;
/**
* @ORM\Column(type="string")
*/
private $observation_element;
/**
* @ORM\Column(type="string")
*/
private $state_element;
/**
* Unidirectional - Many-To-One
*
* @ManyToOne(targetEntity="Trademark")
* @JoinColumn(name="id_element_trademark", referencedColumnName="id_trademark")
*/
private $Trademark;
/**
* Unidirectional - Many-To-One
*
* @ManyToOne(targetEntity="TypeElement")
* @JoinColumn(name="id_element_type_element", referencedColumnName="id_type")
*/
private $TypeElement;
/**
* Unidirectional - Many-To-One
*
* @ManyToOne(targetEntity="Acquisition")
* @JoinColumn(name="id_element_acquisition", referencedColumnName="id_acquisition")
*/
private $Acquisition;



/**
 * Get the value of id_element
 */
public function getIdElement()
{
return $this->id_element;
}

/**
 * Set the value of id_element
 */
public function setIdElement($id_element): self
{
$this->id_element = $id_element;

return $this;
}

/**
 * Get the value of model_element
 */
public function getModelElement()
{
return $this->model_element;
}

/**
 * Set the value of model_element
 */
public function setModelElement($model_element): self
{
$this->model_element = $model_element;

return $this;
}

/**
 * Get the value of serial_element
 */
public function getSerialElement()
{
return $this->serial_element;
}

/**
 * Set the value of serial_element
 */
public function setSerialElement($serial_element): self
{
$this->serial_element = $serial_element;

return $this;
}

/**
 * Get the value of observation_element
 */
public function getObservationElement()
{
return $this->observation_element;
}

/**
 * Set the value of observation_element
 */
public function setObservationElement($observation_element): self
{
$this->observation_element = $observation_element;

return $this;
}

/**
 * Get the value of state_element
 */
public function getStateElement()
{
return $this->state_element;
}

/**
 * Set the value of state_element
 */
public function setStateElement($state_element): self
{
$this->state_element = $state_element;

return $this;
}

/**
 * Get the value of Trademark
 */
public function getTrademark()
{
return $this->Trademark;
}

/**
 * Set the value of Trademark
 */
public function setTrademark($Trademark): self
{
$this->Trademark = $Trademark;

return $this;
}

/**
 * Get the value of TypeElement
 */
public function getTypeElement()
{
return $this->TypeElement;
}

/**
 * Set the value of TypeElement
 */
public function setTypeElement($TypeElement): self
{
$this->TypeElement = $TypeElement;

return $this;
}

/**
 * Get the value of Acquisition
 */
public function getAcquisition()
{
return $this->Acquisition;
}

/**
 * Set the value of Acquisition
 */
public function setAcquisition($Acquisition): self
{
$this->Acquisition = $Acquisition;

return $this;
}
}