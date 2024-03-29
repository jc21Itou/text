<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>画像の登録確認</title>
        <h1>画像の登録確認</h1>
    </head>
    <body bgcolor="#f0ffff">
    <link rel="stylesheet" href="image_add_check.css" >
        
    <?php

    $image_title=$_POST['title'];
    $image_description=$_POST['description'];
    $image_file=$_FILES['gazou'];

    $image_title=htmlspecialchars($image_title,ENT_QUOTES,'UTF-8');
    $image_description=htmlspecialchars($image_description,ENT_QUOTES,'UTF-8');

    if($image_title=='')
    {
        print'タイトルが入力されていません。<br />';
    }
    else
    {
        print'タイトル|';
        print $image_title;
        print'<br />';
    }

    if($image_description=='')
    {
        print'画像の説明を入力してください。<br />';
    }
    else
    {
        print'画像の説明|';
        print $image_description;
        print'<br />';
    }

   
    if($image_file['size'] > 0)
    {
        if( $image_file['size'] > 1000000 )
        {
            print '画像が大きすぎます';
        }
        else
        {
            move_uploaded_file($image_file['tmp_name'],'./image/'.$image_file['name']);
            print'<img src="./image/'.$image_file['name'].'">';
            print'<br />';
        }
    }

    if($image_title==''|| $image_description=='' || $image_file['size'] > 1000000)
    {
        print'<form>';
        print'</form>';
    }
    else
    {
        print'この画像を追加します。<br />';
        print'<form method="post"action="image_add_done.php">';
        print'<input type="hidden" name="title" value="'.$image_title.'">';
        print'<input type="hidden" name="description" value="'.$image_description.'">';
        print'<input type="hidden" name="file" value="'.$image_file['name'].'">';
        print'<br />';
        print'<input type="submit" value="OK">';
        print'</form>';

    }
    
    ?>
    <input type="button" onclick="history.back()"value="戻る">

    
    </body>
</html>
