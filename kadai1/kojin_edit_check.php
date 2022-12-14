<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>データ修正</title>

    </head>
    <body>
    <link rel="stylesheet" href="kojin_list.css" >
    <?php

    $kojin_ID=$_POST['ID'];
    $kojin_simei=$_POST['simei'];
    $kojin_hurigana=$_POST['hurigana'];
    $kojin_yuubinnbanngou=$_POST['yuubinnbanngou'];
    $kojin_jyuusyo=$_POST['jyuusyo'];
    $kojin_dennwabanngou=$_POST['dennwabanngou'];
    $kojin_Email=$_POST['Email'];

    $kojin_ID= htmlspecialchars($kojin_ID,ENT_QUOTES,'UTF-8');
    $kojin_simei= htmlspecialchars($kojin_simei,ENT_QUOTES,'UTF-8');
    $kojin_hurigana= htmlspecialchars($kojin_hurigana,ENT_QUOTES,'UTF-8');
    $kojin_yuubinnbanngou= htmlspecialchars($kojin_yuubinnbanngou,ENT_QUOTES,'UTF-8');
    $kojin_jyuusyo= htmlspecialchars($kojin_jyuusyo,ENT_QUOTES,'UTF-8');
    $kojin_dennwabanngou= htmlspecialchars($kojin_dennwabanngou,ENT_QUOTES,'UTF-8');
    $kojin_Email= htmlspecialchars($kojin_Email,ENT_QUOTES,'UTF-8');

    if($kojin_ID=='')
    {
        print'IDが入力されていません。 <br />';
    }
    else
    {
        print'ID:';
        print$kojin_ID;
        print'<br />';
    }

    if($kojin_simei=='')
    {
        print'氏名が入力されていません。 <br />';
    }
    else
    {
        print'氏名:';
        print$kojin_simei;
        print'<br />';
    }

    if($kojin_hurigana=='')
    {
        print'ふりがなが入力されていません。 <br />';
    }
    else
    {
        print'ふりがな:';
        print$kojin_hurigana;
        print'<br />';
    }

    if($kojin_yuubinnbanngou=='')
    {
        print'郵便番号が入力されていません。 <br />';
    }
    else
    {
        print'郵便番号:';
        print$kojin_yuubinnbanngou;
        print'<br />';
    }

    if($kojin_jyuusyo=='')
    {
        print'住所が入力されていません。 <br />';
    }
    else
    {
        print'住所:';
        print$kojin_jyuusyo;
        print'<br />';
    }

    if($kojin_dennwabanngou=='')
    {
        print'電話番号が入力されていません。 <br />';
    }
    else
    {
        print'電話番号:';
        print$kojin_dennwabanngou;
        print'<br />';
    }

    if($kojin_Email=='')
    {
        print'Eメールアドレスが入力されていません。 <br />';
    }
    else
    {
        print'Email:';
        print$kojin_Email;
        print'<br />';
    }

    if($kojin_ID==''||$kojin_simei==''||$kojin_hurigana==''||$kojin_yuubinnbanngou==''||$kojin_jyuusyo==''||$kojin_dennwabanngou==''||$kojin_Email=='')
    {
        print'<form>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'</form>';
    }
    else
    {
        print'<form method="post" action="kojin_edit_done.php">';
        print'<input type="hidden" name="ID"value="'.$kojin_ID.'">';
        print'<input type="hidden" name="simei"value="'.$kojin_simei.'">';
        print'<input type="hidden" name="hurigana"value="'.$kojin_hurigana.'">';
        print'<input type="hidden" name="yuubinnbanngou"value="'.$kojin_yuubinnbanngou.'">';
        print'<input type="hidden" name="jyuusyo"value="'.$kojin_jyuusyo.'">';
        print'<input type="hidden" name="dennwabanngou"value="'.$kojin_dennwabanngou.'">';
        print'<input type="hidden" name="Email"value="'.$kojin_Email.'">';
        print'<input type="button"onclick="history.back()" value="戻る">';
        print'<input type="submit"value="OK">';
        print'</form>';

    }
    

    ?>
    </body>
