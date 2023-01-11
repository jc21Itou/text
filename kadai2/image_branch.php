<?php

if(isset($_POST['disp'])==true)
{
    if(isset($_POST['title'])==false)
    {
        header('Location: image_ng.php');
        exit();
    }
    $pro_code=$_POST['title'];
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
    if(isset($_POST['title'])==false)
    {
        header('Location: image_ng.php');
        exit();
    }
    $pro_code=$_POST['title'];
    header('Location:image_delete.php?procode='.$image_title);
    exit();
    print'削除ボタンが押された';
}

?>
