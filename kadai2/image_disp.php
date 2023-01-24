<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>画像の表示</title>
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

        $sql = 'SELECT title,description,file FROM image WHERE ID=?';
        $stmt = $dbh->prepare($sql);
        $data[]=$image_ID;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $image_title=$rec['title'];
        $image_description=$rec['description'];
        $image_file_name=$rec['gazou_name'];

        $dbh = null;

        if($image_file_name=='')
        {
            $disp_gazou='';
        }
        else
        {
            $disp_gazou='<img src="./gazou/'.$image_file_name.'">';
        }

    }
    catch(Exception $e)
    {
        print $e->getMessage();
        print'ただいま障害により大変ご迷惑をおかけしております。';
        exit();
    }

    ?>

    画像の表示<br />
    <br />
    【タイトル】<br />
    <?php print $image_title;?>
    <br />
    【説明】<br />
    <?php print $image_description;?>
    <br />
    <?php print $disp_gazou; ?>
    <br />
    <?php print $image_description;?>
    <form>
    
    <input type="button" onclick="history.back()"value="戻る">
    
</form>

    
    </body>
</html>
