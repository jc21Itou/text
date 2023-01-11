<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>画像一覧</title>
    </head>
    <body>
        
    <?php

    try
    {

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT ID,title,description FROM image WHERE 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;

        print'商品一覧<br /><br />';

        print'<form method="post" action="image_branch.php">';
        while(true)
        {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }
            print'<input type="radio" name="titlecode" value="'.$rec['title'].'">';
            print $rec['title'].'---';
            print $rec['description'].
            print'<br />';
        }
        print'<input type="submit" name="disp" value="参照">';
        print'<input type="submit" name="add" value="追加">';
        print'<input type="submit" name="delete" value="削除">';
        print'</form>';

    }
    catch(Exception $e)
    {
        print'ただいま障害により大変なご迷惑をお掛けしております。';
        exit();
    }

    ?>
    </body>
</html>
