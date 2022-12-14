<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>一覧表示</title>
        
    </head>
    <body>
    <link rel="stylesheet" href="kojin_list.css" >
    <?php

    try
    {

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT  ID,simei,hurigana FROM kojin WHERE 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;

    
        print'個人情報一覧<br /><br />';
        

        print'<form method="post" action="kojin_branch.php">';
        while(true)
        {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }
            print'<input type="radio" name="ID"  value="'.$rec['ID'].'" >';
            print $rec['ID'];
            print'<br />';
            print $rec['simei'];
            print'<br />';
            print $rec['hurigana'];
            print'<br />';
        }
        print'<button type="submit" name="disp" > 個別表示 </button>';
        print'<button type="submit" name="edit" > 修正 </button>';
        print'<button type="submit" name="add" > 新規登録 </button>';
        print'<button type="submit" name="delete" > 削除 </button>';
        print'</form>';

    }
    
    catch(Exception $e)
    {
        print'ただいま障害により大変なご迷惑をお掛けしております。';
        print $e->getMessage();
        exit();
    }

    ?>
    </body>
</html>
