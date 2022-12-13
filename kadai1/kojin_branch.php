<?php

if(isset($_POST['disp'])==true)
{
    if(isset($_POST['ID'])==false)
    {
        header('Location: kojin_ng.php');
        exit();
    }
    $kojin_ID=$_POST['ID'];
    header('Location: kojin_disp.php?ID='.$kojin_ID);
    exit();
}

if(isset($_POST['add'])==true)
{
    header('Location: kojin_add.php');
    exit();
}

if(isset($_POST['edit'])==true)
{
    if(isset($_POST['ID'])==false)
    {
        header('Location: kojin_ng.php');
        exit();
    }
    $kojin_ID=$_POST['ID'];
    header('Location: kojin_edit.php?ID='.$kojin_ID);
    exit();
    print'修正ボタンが押された';
}

if(isset($_POST['delete'])==true)
{
    if(isset($_POST['ID'])==false)
    {
        header('Location: kojin_ng.php');
        exit();
    }
    $kojin_ID=$_POST['ID'];
    header('Location:kojin_delete.php?ID='.$kojin_ID);
    exit();
    print'削除ボタンが押された';
}

?>
