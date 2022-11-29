<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>個人情報管理</title>

    </head>
<body>
    <?php

    try
    {
        $ID_add = $POST['ID'];
        $simei_add = $POST['simei'];
        $hurigana_add = $POST['hurigana'];
        $jyuusyo_add = $POST['jyuusyo'];
        $yuubinbangou_add = $POST['yuubinbangou'];
        $Emeruadoresu_add = $POST['Emeruadoresu'];
        
        $ID_add = htmlspecialchars($ID_add,ENT_QUOTES,'UTF-8');
        $simei_add = htmlspecialchars($simei_add,ENT_QUOTES,'UTF-8');
    }
    ?>
</body>




</html>