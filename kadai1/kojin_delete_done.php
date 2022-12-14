<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>削除</title>
    </head>
    <body>
    <link rel="stylesheet" href="kojin_list.css" >
        <?php

        try
        {

            $kojin_ID = $_POST['ID'];
            

            $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql = 'DELETE  FROM kojin WHERE ID=?';
            $stmt = $dbh->prepare($sql);
            $data[] = $kojin_ID;
            $stmt->execute($data);
            


            $dbh = null;

            
        }
        catch (Exception $e)
        {
            print'ただいま障害により大変ご迷惑をおかけしております。';
            print $e->getMessage();
            exit();
        }
        
        ?>

        削除しました。<br />
        <br />

        <a href="kojin_list.php">戻る</a>

    </body>
</html>
