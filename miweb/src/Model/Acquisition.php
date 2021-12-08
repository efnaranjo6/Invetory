<?php
require_once "../../bootstrap.php";
require "../Entity/Acquisition.php";
class Acquisitionmodel{
    public function Insert($entity,$newAcquisition){
        $Acquisition = new Acquisition();
        $Acquisition->setNameAcquisition($newAcquisition);
        $entity->persist($Acquisition);
        $entity->flush();
        echo "Created Acquisition with ID " . $Acquisition->getIdAcquisition() . "\n";
    }
    public function Select($entity){
        $Acquisitions=$entity->getRepository('Acquisition')->findBy(array('state_acquisition' => 'ACTIVE'));
         return $Acquisitions;
    }
    public function Search($entity,$Acquisition){
       $search_Acquisition=$entity->getRepository('Acquisition')->findOneBy(array('name_acquisition' => $Acquisition));
       if ($search_Acquisition === null) {
            echo "No product found.\n";
       }
       else{
            echo sprintf("-%s\n", $search_Acquisition->getNameAcquisition());
       }
    }
    public function Update($entity,$Acquisition,$name){
        $update_Acquisition = $entity->find('Acquisition', $Acquisition);
        if ($update_Acquisition === null) {
            echo "Acquisition $Acquisition does not exist.\n";
        }
        else{
            $update_Acquisition->setNameAcquisition($name);
            $entity->flush();
            echo "this Acquisition $name updated.\n";
        }
    }  
    public function Delete($entity,$Acquisition,$name){
         $delete_Acquisition = $entity->find('Acquisition', $Acquisition);
        if ($delete_Acquisition === null) {
            echo "Acquisition $Acquisition does not exist.\n";
        }
        else{
            $delete_Acquisition->setStateAcquisition($name);
            $entity->flush();
            echo " Acquisition $name has been deleted\n";
        }
    }
}