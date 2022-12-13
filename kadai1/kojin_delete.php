<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>削除</title>
    </head>
    <body>
        
    <?php

    try
    {

        $kojin_ID=$_GET['ID'];

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT ID,simei FROM kojin WHERE ID=?';
        $stmt = $dbh->prepare($sql);
        $data[]=$kojin_ID;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $kojin_simei=$rec['simei'];

        $dbh = null;

    }
    catch(Exception $e)
    {
        print'ただいま障害により大変ご迷惑をおかけしております。';
        print $e->getMessage();
        exit();
    }

    ?>

    個人情報削除<br />
    <br />
    ID<br />
    <?php print $kojin_ID;?>
    <br />
    氏名<br />
    <?php print$kojin_simei;?>
    <br />
    この個人情報を削除してよろしいですか？<br />
    <form method="post" action="kojin_delete_done.php">
    <input type="hidden" name="ID" value="<?php print$kojin_ID;?>">
    <input type="button" onclick="history.back()"value="戻る">
    <input type="submit" value="OK">
</form>

    
    </body>
</html>