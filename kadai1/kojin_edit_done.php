<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>データ修正</title>

    </head>
    <body>
    <link rel="stylesheet" href="kojin_list.css" >
    <?php

    try
    {

        $kojin_ID = $_POST['ID'];
        $kojin_simei = $_POST['simei'];
        $kojin_hurigana = $_POST['hurigana'];
        $kojin_yuubinnbanngou = $_POST['yuubinnbanngou'];
        $kojin_jyuusyo = $_POST['jyuusyo'];
        $kojin_dennwabanngou = $_POST['dennwabanngou'];
        $kojin_Email = $_POST['Email'];

        
        $kojin_simei = htmlspecialchars($kojin_simei,ENT_QUOTES,'UTF-8');
        $kojin_hurigana = htmlspecialchars($kojin_hurigana,ENT_QUOTES,'UTF-8');
        $kojin_yuubinnbanngou = htmlspecialchars($kojin_yuubinnbanngou,ENT_QUOTES,'UTF-8');
        $kojin_jyuusyo = htmlspecialchars($kojin_jyuusyo,ENT_QUOTES,'UTF-8');
        $kojin_dennwabanngou = htmlspecialchars($kojin_dennwabanngou,ENT_QUOTES,'UTF-8');
        $kojin_Email = htmlspecialchars($kojin_Email,ENT_QUOTES,'UTF-8');

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'UPDATE kojin SET simei=?,hurigana=?,yuubinnbanngou=?,jyuusyo=?,dennwabanngou=?,Email=? WHERE ID=?';
            $stmt = $dbh->prepare($sql);
            $data[] = $kojin_simei;
            $data[] = $kojin_hurigana;
            $data[] = $kojin_yuubinnbanngou;
            $data[] = $kojin_jyuusyo;
            $data[] = $kojin_dennwabanngou;
            $data[] = $kojin_Email;
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

        修正しました。<br />
        <br />

        <a href="kojin_list.php">戻る</a>
    
    </body>
