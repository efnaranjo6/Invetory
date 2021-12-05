<?php
require "../Model/TypeElement.php";
if(isset($_POST['prosecution'])){
    $processing = $_POST['prosecution'];
}
else{
    $processing=4;
}
$TypeElementmodel = new TypeElementmodel();

if($processing==5){
    $name = $_POST['nametype'];
    $id = $_POST['idtype'];
    $TypeElementmodel->Update($entityManager,$id,$name);
}
elseif($processing==1){
    $name = $_POST['name'];
   $TypeElementmodel->Insert($entityManager,$name);

}
else if($processing==3){
        $name = $_POST['nametype'];
        $id = $_POST['idtype'];
    $TypeElementmodel->Delete($entityManager,$id,$name);
}
else if($processing==4){ 
    $result=$TypeElementmodel->Select($entityManager);
    foreach ($result as $key):
        $id= $key->getIdType();
        $name =$key->getNameType();
         $data[] =
         array(
            "id_type" => $id,
            "name" => $name
         );
        endforeach;
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}
     
else if($processing==6){
    $TypeElementmodel->Search($entityManager,'');
}