<?php
require_once "../../bootstrap.php";
require "../Entity/Element.php";
require "../Entity/Acquisition.php";
require "../Entity/Trademark.php";
require "../Entity/TypeElement.php";
require "../Entity/TypeComponent.php";
require "../Entity/Component.php";
require "../Entity/DetailElement.php";
class Elementmodel{
    public function Insert($entity,$model,$serial,$observation,$TradeMarck,$typeElement,$acquisition,$details){
        $Element = new Element();
        $Element->setModelElement($model);
        $Element->setSerialElement($serial);
        $Element->setObservationElement($observation);
        $Trademarck= array($TradeMarck);
        foreach ($Trademarck as $TrademarckId) {
            $trademarck = $entity->find("Trademark", $TrademarckId);
            $Element->setTrademark($trademarck);
        }
        $TypeElement= array($typeElement);
        foreach ($TypeElement as $TypeElementId) {
            $typeelement = $entity->find("TypeElement", $TypeElementId);
            $Element->setTypeElement($typeelement);
        }
        $Acquisition= array($acquisition);
        foreach ($Acquisition as $AcquisitionId) {
            $acquisitio = $entity->find("Acquisition", $AcquisitionId);
            $Element->setAcquisition($acquisitio);
        }
        $entity->persist($Element);
        $entity->flush();
       
        echo $Element->getSerialElement().' Element add<br>';
        $this->insertDetails($entity,$Element->getIdElement(),$details);
    }
    public function insertDetails($entity,$element,$Details){
         $count=0;
            foreach ($Details as $key){
                $DetailElement = new DetailElement();
                $count++;
                foreach ([$key["componet"] ]as $componetId) {
                    $Componet = $entity->find("Component", $componetId);
                    $DetailElement->setComponent($Componet);
                }
                $Element = $entity->find("Element", $element);
                $DetailElement->setElement($Element);
                $DetailElement->setDetailDetailelement($key["specifications"]);
                $entity->persist($DetailElement);
                $entity->flush();
            }
            echo $count.' detail elements add ';

    }
    public function Select($entity){
         $query = $entity->createQueryBuilder();
         $sql=$query->select('e.id_element','e.model_element','e.serial_element','e.observation_element','t.name_trademark','tp.name_type','a.name_acquisition','t.id_trademark','tp.id_type','a.id_acquisition')
         ->from('Element','e')
         ->where('e.state_element = :state_element')
         ->setParameter('state_element', 'ACTIVE')
         ->innerJoin('e.Trademark', 't')
         ->innerJoin('e.TypeElement', 'tp')
         ->innerJoin('e.Acquisition', 'a');
         $result=$sql->getQuery();
         $Elements= $result->getResult();
        return $Elements;
    }
    public function Search($entity,$Element){
       $search_Element=$entity->getRepository('Element')->findOneBy(array('model_element' => $Element));
       if ($search_Element === null) {
            echo "No product found.\n";
       }
       else{
            echo sprintf("-%s\n", $search_Element->getNameElement());
       }
    }
    public function Update($entity,$Element,$model,$serial,$observation,$TradeMarck,$typeElement,$acquisition){
        $update_Element = $entity->find('Element', $Element);
        if ($update_Element === null) {
            echo "Element $model does not exist.\n";
        }
        else{
            $update_Element->setModelElement($model);
            $update_Element->setSerialElement($serial);
            $update_Element->setObservationElement($observation);
            $Trademarck= array($TradeMarck);
            foreach ($Trademarck as $TrademarckId) {
                $trademarck = $entity->find("Trademark", $TrademarckId);
                $update_Element->setTrademark($trademarck);
            }
            $TypeElement= array($typeElement);
            foreach ($TypeElement as $TypeElementId) {
                $typeelement = $entity->find("TypeElement", $TypeElementId);
                $update_Element->setTypeElement($typeelement);
            }
            $Acquisition= array($acquisition);
            foreach ($Acquisition as $AcquisitionId) {
                $acquisitio = $entity->find("Acquisition", $AcquisitionId);
                $update_Element->setAcquisition($acquisitio);
            }
            $entity->flush();
            echo "this Element $model updated.\n";
        }
    }  
    public function Delete($entity,$Element,$name){
         $delete_Element = $entity->find('Element', $Element);
        if ($delete_Element === null) {
            echo "Element $Element does not exist.\n";
        }
        else{
            $delete_Element->setStateElement($name);
            $entity->flush();
            echo " Element $name has been deleted\n";
        }
    }
    public function selectTypecomponent($entity){
        $Types=$entity->getRepository('TypeComponent')->findBy(array('state_typecomponent' => 'A'));
        return $Types;
    }
    public function SelectComponet($entity,$id){
         $TypeElement= array($id);
        $Component=$entity->getRepository('Component')->findBy(array('TypeComponent' => $TypeElement));
        return $Component;
    }
    public function SelectDetail($entity,$id){
         $query = $entity->createQueryBuilder();
         $sql=$query->select('DT.id_detailelement','C.name_component','DT.detail_detailelement','TC.name_typecomponent')
                    ->from('DetailElement','DT')
                    ->where('DT.state_detailelement = :state_detailelement')
                    ->setParameter('state_detailelement', 'ACTIVE')
                     ->andWhere('E.id_element = :id_element')
                     ->setParameter('id_element',$id)
                    ->innerJoin('DT.Component', 'C')
                    ->innerJoin('C.TypeComponent', 'TC')
                    ->innerJoin('DT.Element', 'E');
                   
         $result=$sql->getQuery();
   
         $DetailElement= $result->getResult();
    return $DetailElement;
    }
    public function DeleteDetail($entity,$Detail){
        $name='INACTIVE';
        $delete_Detail = $entity->find('DetailElement', $Detail);
        if ($delete_Detail === null) {
            echo "Detail $Detail does not exist.\n";
        }
        else{
            $delete_Detail->setStateDetailelement($name);
            $entity->flush();
            echo " Element has been deleted\n";
        }
    }
}