<?php
require_once "../../bootstrap.php";
require "../Entity/Person.php";
require "../Entity/Departament.php";
class Personmodel{
    public function Insert($entity,$name,$lastname,$codeid,$dateborn,$dep){
        $Person = new Person();
        $Person->setNamePerson($name);
        $Person->setLastnamePerson($lastname);
        $Person->setCodeidPerson($codeid);
        $Person->setDatebornPerson($dateborn);
        $Person->setDepartament($dep);
        $departamenta= array($dep);
        foreach ($departamenta as $departamenId) {
            $depart = $entity->find("Departament", $departamenId);
            $Person->setDepartament($depart);
        }


        $entity->persist($Person);
        $entity->flush();
        echo "Created Person with ID " . $Person->getIdPerson() . "\n";
    }
    public function Select($entity){
        $query = $entity->createQueryBuilder();
        $sql=$query->select('p.id_person','p.name_person','p.lastname_person','p.codeid_person','p.dateborn_person','x.id_departament','x.name_departament')
                    ->from('Person','p')
                    ->where('p.state_person = :state_person')
                    ->setParameter('state_person', 'ACTIVE')
                    ->innerJoin('p.Departament', 'x');
        $result=$sql->getQuery();
        $person= $result->getResult();
         return $person;
    }
    public function Search($entity,$Person){
       $search_Person=$entity->getRepository('Person')->findOneBy(array('name_person' => $Person));
       if ($search_Person === null) {
            echo "No product found.\n";
       }
       else{
            echo sprintf("-%s\n", $search_Person->getNamePerson());
       }
    }
    public function Update($entity,$id,$name,$lastname,$codeid,$dateborn,$dep){
        $update_Person = $entity->find('Person', $id);
        if ($update_Person === null) {
            echo "Person $codeid does not exist.\n";
        }
        else{
            $update_Person->setNamePerson($name);
            $update_Person->setLastnamePerson($lastname);
            $update_Person->setCodeidPerson($codeid);
            $update_Person->setDatebornPerson($dateborn);
            $departamenta= array($dep);
             foreach ($departamenta as $departamenId) {
             $depart = $entity->find("Departament", $departamenId);
             $update_Person->setDepartament($depart);
             }
            $entity->flush();
            echo "this Person $codeid updated.\n";
        }
    }  
    public function Delete($entity,$id,$name){
         $delete_Person = $entity->find('Person', $id);
        if ($delete_Person === null) {
            echo "Person $id does not exist.\n";
        }
        else{
            $delete_Person->setStatePerson($name);
            $entity->flush();
            echo " Person $name has been deleted\n";
        }
    }
}