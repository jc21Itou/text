<?php

if(isset($_POST['disp'])==true)
{
    if(isset($_POST['ID'])==false)
    {
        header('Location: image_ng.php');
        exit();
    }
    $image_ID=$_POST['ID'];
    header('Location: image_disp.php?title='.$image_title);
    exit();
}

if(isset($_POST['add'])==true)
{
    header('Location: image_add.php');
    exit();
}

if(isset($_POST['delete'])==true)
{
    if(isset($_POST['ID'])==false)
    {
        header('Location: image_ng.php');
        exit();
    }
    $image_ID=$_POST['ID'];
    header('Location:image_delete.php?imageID='.$image_ID);
    exit();
    print'削除ボタンが押された';
}

?>
