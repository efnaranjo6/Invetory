<?php
require "../Model/Acquisition.php";

if(isset($_POST['prosecution'])){
    $processing = $_POST['prosecution'];
}
else{
    $processing=4;
}
$Acquisitionmodel = new Acquisitionmodel();
if($processing==5){
    $name = $_POST['nameAcquisition'];
    $id = $_POST['idAcquisition'];
    $Acquisitionmodel->Update($entityManager,$id,$name);
}

elseif($processing==1){

    $name = $_POST['name'];
    $Acquisitionmodel->Insert($entityManager,$name);
}
else if($processing==3){
    $name = $_POST['nameAcquisition'];
    $id = $_POST['idAcquisition'];
    $Acquisitionmodel->Delete($entityManager,$id,$name);
}
else if($processing==4){ 
    $result=$Acquisitionmodel->Select($entityManager);
    foreach ($result as $key):
         $id= $key->getIdAcquisition();
          $name =$key->getNameAcquisition();
         $data[] =
         array(
            "id_acquisition" => $id,
            "name" => $name
         );
        endforeach;
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}
     
else if($processing==6){
    $Acquisitionmodel->Search($entityManager,'');
}