<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
        <h1>画像削除</h1>
    </head>
    <body bgcolor="#f0ffff">
    <link rel="stylesheet" href="image_delet_done.css" >

        <?php

        try
        {

            $image_ID = $_POST['ID'];
            
            

            $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql = 'DELETE FROM image WHERE ID=?';
            $stmt = $dbh->prepare($sql);
            $data[] = $image_ID;
            $stmt->execute($data);

            $dbh = null;

            

            
        }
        catch (Exception $e)
        {
            print $e->getMessage();
            print'ただいま障害により大変ご迷惑をおかけしております。';
            exit();
        }
        
        ?>

        削除しました。<br />
        <br />

        <a href="image_list.php">戻る</a>

    </body>
</html>
