<?php
require_once "../../bootstrap.php";
require "../Entity/Departament.php";
class Departamentmodel{
    public function Insert($entity,$newDepartament){
        $Departament = new Departament();
        $Departament->setNameDepartament($newDepartament);
        $entity->persist($Departament);
        $entity->flush();
        echo "Created Departament with ID " . $Departament->getIdDepartament() . "\n";
    }
    public function Select($entity){
        $Departaments=$entity->getRepository('Departament')->findBy(array('state_departament' => 'ACTIVE'));
         return $Departaments;
    }
    public function Search($entity,$Departament){
       $search_Departament=$entity->getRepository('Departament')->findOneBy(array('name_departament' => $Departament));
       if ($search_Departament === null) {
            echo "No product found.\n";
       }
       else{
            echo sprintf("-%s\n", $search_Departament->getNameDepartament());
       }
    }
    public function Update($entity,$Departament,$name){
        $update_Departament = $entity->find('Departament', $Departament);
        if ($update_Departament === null) {
            echo "Departament $Departament does not exist.\n";
        }
        else{
            $update_Departament->setNameDepartament($name);
            $entity->flush();
            echo "this Departament $name updated.\n";
        }
    }  
    public function Delete($entity,$Departament,$name){
         $delete_Departament = $entity->find('Departament', $Departament);
        if ($delete_Departament === null) {
            echo "Departament $Departament does not exist.\n";
        }
        else{
            $delete_Departament->setStateDepartament($name);
            $entity->flush();
            echo " Departament $name has been deleted\n";
        }
    }
}