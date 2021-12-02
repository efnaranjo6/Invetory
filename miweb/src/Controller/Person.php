<?php
require "../Model/Person.php";
if(isset($_POST['prosecution'])){
    $processing = $_POST['prosecution'];
}
else{
    $processing=4;
}
$Personmodel = new Personmodel();
if($processing==5){
    $id = $_POST['idPerson'];
    $name = $_POST['nptxt'];
    $lastname = $_POST['nltxt'];
    $codeid = $_POST['citxt'];
    $dateborn = $_POST['dbtxt'];
    $departamet = $_POST['dptxt'];
    $Personmodel->Update($entityManager,$id,$name,$lastname,$codeid,$dateborn,$departamet);
}
elseif($processing==1){
    $name = $_POST['namePerson'];
    $lastname = $_POST['lastnamePerson'];
    $codeid = $_POST['idcodePerson'];
    $dateborn = $_POST['datebornPerson'];
    $departamet = $_POST['departamentI'];
    $Personmodel->Insert($entityManager,$name,$lastname,$codeid,$dateborn,$departamet);
}
else if($processing==3){
    $name = $_POST['statusPerson'];
    $id = $_POST['idPerson'];
    $Personmodel->Delete($entityManager,$id,$name);
}
else if($processing==4){ 
    $result=$Personmodel->Select($entityManager);
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
}
     
else if($processing==6){
    $Personmodel->Search($entityManager,'');
}