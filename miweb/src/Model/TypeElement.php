<?php
require_once "../../bootstrap.php";
require "../Entity/TypeElement.php";
class TypeElementmodel{
    public function Insert($entity,$newTypeElement){
        $TypeElement = new TypeElement();
        $TypeElement->setNameType($newTypeElement);
        $entity->persist($TypeElement);
        $entity->flush();
        echo "Created Type with ID " . $TypeElement->getIdType() . "\n";
    }
    public function Select($entity){
        $TypeElements=$entity->getRepository('TypeElement')->findBy(array('state_type' => 'ACTIVE'));
         return $TypeElements;
    }
    public function Search($entity,$TypeElement){
       $search_TypeElement=$entity->getRepository('TypeElement')->findOneBy(array('name_TypeElement' => $TypeElement));
       if ($search_TypeElement === null) {
            echo "No product found.\n";
       }
       else{
            echo sprintf("-%s\n", $search_TypeElement->getNameType());
       }
    }
    public function Update($entity,$TypeElement,$name){
        $update_TypeElement = $entity->find('TypeElement', $TypeElement);
        if ($update_TypeElement === null) {
            echo "TypeElement $TypeElement does not exist.\n";
        }
        else{
            $update_TypeElement->setNameType($name);
            $entity->flush();
            echo "this Type element $name updated.\n";
        }
    }  
    public function Delete($entity,$TypeElement,$name){
         $delete_TypeElement = $entity->find('TypeElement', $TypeElement);
        if ($delete_TypeElement === null) {
            echo "TypeElement $TypeElement does not exist.\n";
        }
        else{
            $delete_TypeElement->setStateType($name);
            $entity->flush();
            echo " Trademarcks $name has been deleted\n";
        }
    }
}