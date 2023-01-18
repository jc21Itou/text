<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>画像の削除確認</title>
    </head>
    <body>
        
    <?php

    try
    {

        $image_ID=$_GET['ID'];

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT title,fail, FROM image WHERE ID=?';
        $stmt = $dbh->prepare($sql);
        $data[]=$image_ID;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $image_title=$rec['title'];
        $image_fail_name=$rec['gazou_name'];

        $dbh = null;

        if($image_fail_name=='')
        {
            $disp_gazou='';
        }
        else
        {
            $disp_gazou='<img src="./gazou/'.$image_fail_name.'">';
        }

    }
    catch(Exception $e)
    {
        print'ただいま障害により大変ご迷惑をおかけしております。';
        exit();
    }

    ?>

    画像の削除確認<br />
    <br />
    【ID】<br />
    <?php print $image_code;?>
    <br />
    【タイトル】<br />
    <?php print$image_title;?>
    <br />
    <?php print $disp_gazou;?>
    <br />
    このファイルを削除してよろしいですか？<br />
    <form method="post" action="image_delete_done.php">
    <input type="hidden" name="code" value="<?php print$image_code;?>">
    <input type="hidden" name="gazou_name" value="<?php print$image_fail_name;?>">
    <button type="button" onclick="history.back()">戻る</button>
    <input type="submit" value="OK">
    <input type="hidden" name="gazou_name" value="<?php print $image_fail_name;?>">
</form>

    
    </body>
</html>
