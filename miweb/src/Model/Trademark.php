<?php
require_once "../../bootstrap.php";
require "../Entity/Trademark.php";
class Trademarkmodel{
    public function Insert($entity,$newtrademark){
        $trademark = new Trademark();
        $trademark->setNameTrademark($newtrademark);
        $entity->persist($trademark);
        $entity->flush();
        echo "Created Product with ID " . $trademark->getIdTrademark() . "\n";
    }
    public function Select($entity){
        $trademarks=$entity->getRepository('Trademark')->findBy(array('state_trademark' => 'ACTIVE'));
         return $trademarks;
    }
    public function Search($entity,$trademark){
       $search_trademark=$entity->getRepository('Trademark')->findOneBy(array('name_trademark' => $trademark));
       if ($search_trademark === null) {
            echo "No product found.\n";
       }
       else{
            echo sprintf("-%s\n", $search_trademark->getNameTrademark());
       }
    }
    public function Update($entity,$trademark,$name){
        $update_trademark = $entity->find('Trademark', $trademark);
        if ($update_trademark === null) {
            echo "Trademark $trademark does not exist.\n";
        }
        else{
            $update_trademark->setNameTrademark($name);
            $entity->flush();
            echo "this Trademark $name updated.\n";
        }
    }  
    public function Delete($entity,$trademark,$name){
         $delete_trademark = $entity->find('Trademark', $trademark);
        if ($delete_trademark === null) {
            echo "Trademark $trademark does not exist.\n";
        }
        else{
            $delete_trademark->setStateTrademark($name);
            $entity->flush();
            echo " Trademarcks $name has been deleted\n";
        }
    }
}
