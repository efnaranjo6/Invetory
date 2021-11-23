<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
/**
* @ORM\Entity
* @ORM\Table(name="DetailElement")
*/
class DetailElement{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id_detailelement;
    /**
    * @ORM\Column(type="string")
    */
    private $state_detailelement;
    /**
    * @ORM\Column(type="string")
    */
    private $detail_detailelement;
    /**
    * Unidirectional - Many-To-One
    *
    * @ManyToOne(targetEntity="Element")
    * @JoinColumn(name="id_element_detail", referencedColumnName="id_element")
    */
    private $Element;

    /**
    * Unidirectional - Many-To-One
    *
    * @ManyToOne(targetEntity="Component")
    * @JoinColumn(name="id_element_component", referencedColumnName="id_component")
    */
    private $Component;

    /**
     * Get the value of id_detailelement
     */
    public function getIdDetailelement()
    {
        return $this->id_detailelement;
    }

    /**
     * Set the value of id_detailelement
     */
    public function setIdDetailelement($id_detailelement): self
    {
        $this->id_detailelement = $id_detailelement;

        return $this;
    }

    /**
     * Get the value of state_detailelement
     */
    public function getStateDetailelement()
    {
        return $this->state_detailelement;
    }

    /**
     * Set the value of state_detailelement
     */
    public function setStateDetailelement($state_detailelement): self
    {
        $this->state_detailelement = $state_detailelement;

        return $this;
    }

    /**
     * Get the value of detail_detailelement
     */
    public function getDetailDetailelement()
    {
        return $this->detail_detailelement;
    }

    /**
     * Set the value of detail_detailelement
     */
    public function setDetailDetailelement($detail_detailelement): self
    {
        $this->detail_detailelement = $detail_detailelement;

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
     * Get the value of Component
     */
    public function getComponent()
    {
        return $this->Component;
    }

    /**
     * Set the value of Component
     */
    public function setComponent($Component): self
    {
        $this->Component = $Component;

        return $this;
    }
}