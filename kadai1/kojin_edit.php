<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>データ修正</title>
    </head>
    <body>
    <link rel="stylesheet" href="kojin_edit.css" >
        
    <?php

    try
    {

        
        $kojin_ID=$_GET['ID'];
        

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT simei,hurigana,yuubinnbanngou,jyuusyo,dennwabanngou,Email FROM kojin WHERE ID=?';
        $stmt = $dbh->prepare($sql);
        $data[]=$kojin_ID;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $kojin_simei=$rec['simei'];
        $kojin_hurigana=$rec['hurigana'];
        $kojin_yuubinnbanngou=$rec['yuubinnbanngou'];
        $kojin_jyuusyo=$rec['jyuusyo'];
        $kojin_dennwabanngou=$rec['dennwabanngou'];
        $kojin_Email=$rec['Email'];

        $dbh = null;

    }
    catch(Exception $e)
    {
        print'ただいま障害により大変ご迷惑をおかけしております。';
        exit();
    }

    ?>

    個人情報修正<br />
    <br />
    <br />
    <form method="post" action="kojin_edit_check.php">
    
    <br />
    <input type="text" name="ID" value="<?php print$kojin_ID;?>">
    <br />
    <input type="text" name="simei" value="<?php print $kojin_simei;?>">
    <br />
    <input type="text" name="hurigana" value="<?php print$kojin_hurigana;?>">
    <br />
    <input type="text" name="yuubinnbanngou" value="<?php print$kojin_yuubinnbanngou;?>">
    <br />
    <input type="text" name="jyuusyo" value="<?php print$kojin_jyuusyo;?>">
    <br />
    <input type="text" name="dennwabanngou" value="<?php print$kojin_dennwabanngou;?>">
    <br />
    <input type="text" name="Email" value="<?php print$kojin_Email;?>">
    <br />
    <input type="button" onclick="history.back()"value="戻る">
    <input type="submit" value="OK">
</form>

    
    </body>
</html>

        
    