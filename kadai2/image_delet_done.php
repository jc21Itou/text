<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>

        <?php

        try
        {

            $image_ID = $_POST['ID'];
            $image_file_name=$_POST['gazou_name'];
            

            $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql = 'DELETE FROM fail WHERE code=?';
            $stmt = $dbh->prepare($sql);
            $data[] = $image_ID;
            $stmt->execute($data);

            $dbh = null;

            if($image_file_name !='')
            {
                unlink('./gazou/'.$image_file_name);
            }

            
        }
        catch (Exception $e)
        {
            print'ただいま障害により大変ご迷惑をおかけしております。';
            exit();
        }
        
        ?>

        削除しました。<br />
        <br />

        <a href="image_list.php">戻る</a>

    </body>
</html>
