<?php
require "../Model/Departament.php";
if(isset($_POST['prosecution'])){
    $processing = $_POST['prosecution'];
}
else{
    $processing=4;
}
$Departamentmodel = new Departamentmodel();
if($processing==5){
    $name = $_POST['nameDepartament'];
    $id = $_POST['idDepartament'];
    $Departamentmodel->Update($entityManager,$id,$name);
}
elseif($processing==1){
    $name = $_POST['name'];
    $Departamentmodel->Insert($entityManager,$name);
}
else if($processing==3){
    $name = $_POST['nameDepartament'];
    $id = $_POST['idDepartament'];
    $Departamentmodel->Delete($entityManager,$id,$name);
}
else if($processing==4){ 
    $result=$Departamentmodel->Select($entityManager);
    foreach ($result as $key):
        $id= $key->getIdDepartament();
        $name =$key->getNameDepartament();
         $data[] =
         array(
            "id_Departament" => $id,
            "name" => $name
         );
        endforeach;
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}
     
else if($processing==6){
    $Departamentmodel->Search($entityManager,'');
}