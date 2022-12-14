<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>個別表示</title>
    </head>
    <body>
    <link rel="stylesheet" href="kojin_list.css" >
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

    個人情報一覧<br />
    <br />
    ID<br />
    <?php print $kojin_ID;?>
    <br />
    氏名<br />
    <?php print $kojin_simei;?>
    <br />
    ふりがな<br />
    <?php print $kojin_hurigana;?>
    <br />
    郵便番号<br />
    <?php print $kojin_yuubinnbanngou;?>
    <br />
    住所<br />
    <?php print $kojin_jyuusyo;?>
    <br />
    電話番号<br />
    <?php print $kojin_dennwabanngou;?>
    <br />
    E-mail<br />
    <?php print $kojin_Email;?>
    <br />

    <form>
    
    <input type="button" onclick="history.back()"value="戻る">
    
</form>

    
    </body>
</html>
