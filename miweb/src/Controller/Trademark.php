<?php
require "../Model/Trademark.php";
if(isset($_POST['prosecution'])){
    $processing = $_POST['prosecution'];
}
else{
    $processing=4;
}
$trademarkmodel = new Trademarkmodel();

if($processing==5){
    $name = $_POST['nametrade'];
    $id = $_POST['idtrade'];
    $trademarkmodel->Update($entityManager,$id,$name);
}
elseif($processing==1){
    $name = $_POST['name'];
   $trademarkmodel->Insert($entityManager,$name);

}
else if($processing==3){
        $name = $_POST['nametrade'];
        $id = $_POST['idtrade'];
    $trademarkmodel->Delete($entityManager,$id,$name);
}
else if($processing==4){ 
    $result=$trademarkmodel->Select($entityManager);
    foreach ($result as $key):
        $id= $key->getIdTrademark();
        $name =$key->getNameTrademark();
         $data[] =
         array(
            "id_trade" => $id,
            "name" => $name
         );
        endforeach;
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}
     
else if($processing==6){
    $trademarkmodel->Search($entityManager,'');
}