<?php
require "../Model/Element.php";
if(isset($_POST['prosecution'])){
    $processing = $_POST['prosecution'];
}
else{
    $processing=4;
}
$Elementmodel = new Elementmodel();
if($processing==5){
    $model = htmlspecialchars($_POST['modElement']);
    $serial = htmlspecialchars($_POST['serElement']);
    $observation = htmlspecialchars($_POST['obserElement']);
    $TradeMarck = htmlspecialchars($_POST['tradElement']);
    $typeElement = htmlspecialchars($_POST['tyElement']);
    $acquisition = htmlspecialchars($_POST['acqElement']);
    $id = htmlspecialchars($_POST['idElement']);
    $Elementmodel->Update($entityManager,$id,$model,$serial,$observation,$TradeMarck,$typeElement,$acquisition);
}
elseif($processing==1){
    $model = htmlspecialchars($_POST['modelElement']);
    $serial = htmlspecialchars($_POST['serialElement']);
    $observation = htmlspecialchars($_POST['observationElement']);
    $TradeMarck = $_POST['sidtrade'];
    $typeElement = $_POST['sidtype'];
    $acquisition = $_POST['sidaction'];
    $detailsElements = $_POST['array'];
    for ($i=1; $i <= $detailsElements; $i++) {
        $component = $_POST['selectcomponett'.$i];
        $deatil= $_POST['specifi'.$i];
        $dts[] =
            array(
                "componet" => $component,
                "specifications" => $deatil
            );       
    }
    $Elementmodel->Insert($entityManager,$model,$serial,$observation,$TradeMarck,$typeElement,$acquisition,$dts);
}
else if($processing==3){
    $name = 'INACTIVE';
    $id = $_POST['idElement'];
    $Elementmodel->Delete($entityManager,$id,$name);
}
else if($processing==4){  
    $result=$Elementmodel->Select($entityManager);
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
}    
else if($processing==6){
    $Elementmodel->Search($entityManager,'');
}
else if($processing==7){
    $resulttype=$Elementmodel->selectTypecomponent($entityManager);
    foreach ($resulttype as $keyt):
        $idt= $keyt->getIdTypecomponent();
        $namet =$keyt->getNameTypecomponent();
        $datat[] =
            array(
                "id_typecomponent" => $idt,
                "name_typecomponent" => $namet
            );
    endforeach;
    echo json_encode($datat,JSON_UNESCAPED_UNICODE);       
}
else if($processing==8){
    $idtc = $_POST['tiper'];
    $result=$Elementmodel->SelectComponet($entityManager,$idtc);
    foreach ($result as $keyc):
        $idc= $keyc->getIdComponent();
        $namec =$keyc->getNameComponent();
        $datac[] =
            array(
                "id_component" => $idc,
                "name_component" => $namec
            );
    endforeach;
    echo json_encode($datac,JSON_UNESCAPED_UNICODE);
}
else if($processing==9){
    $idtc = $_POST['idElement'];
    $result=$Elementmodel->SelectDetail($entityManager,$idtc);
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
}
else if($processing==10){
        $component = $_POST['componentmd'];
        $deatil= $_POST['observationmd'];
        $dts[] =
            array(
                "componet" => $component,
                "specifications" => $deatil
            );
    $element= $_POST['idElement'];
    $Elementmodel->insertDetails($entityManager,$element,$dts);
}
else if($processing==11){
   $Detail =$_POST['iddt'];
    $Elementmodel->DeleteDetail($entityManager,$Detail);
}

