<?php
include 'Transfer.class.php';
$t=new Transfer(array('fieldName'=>'pic'));
if(isset($_POST['send'])){
        if($t->upload()){
            echo "ok";
        }else{
            echo $t->getError();
        }
}
?>