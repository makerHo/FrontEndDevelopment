<?php
if(isset($_POST['send'])){
    //$_FILES可以接受上传文件信息
    //var_dump($_FILES);
    //var_dump($_POST);
    //move_uploaded_file(临时文件，新文件)
    //临时文件:$_FILES['pic']['tmp_name']
    //新文件:$_FILES['pic']['name']
    if(move_uploaded_file($_FILES['pic']['tmp_name'],$_FILES['pic']['name'])){
        echo "ok";
    }else{
        echo "failed";
    }
}
?>