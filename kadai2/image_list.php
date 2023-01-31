<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>画像一覧</title>
        <div class="box1"><h1>画像一覧</h1></div>
    </head>
    <body bgcolor="#f0ffff">
        <table border="1" style="border-collapse: collapse" cellpadding="10" align="center">
    
    <link rel="stylesheet" href="image_list.css" >
    <div class="box1">
    <?php
    
    try
    {

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT ID,title,description,file FROM image WHERE 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;

        

        print'<form method="post" action="image_branch.php">';
        while(true)
        {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }
            print'<input type="radio" name="ID" value="'.$rec['ID'].'">';
            print $rec['ID'].'<br />';
            print $rec['title'].'---';'<br />';
            print $rec['description'].'<br />';
            print'<img class="images" src="./image/'. $rec['file'].'">';
            print'<br />';
        }
        '<br />';
        print'<input type="submit" name="disp" value="参照">';
        print'<input type="submit" name="add" value="追加">';
        print'<input type="submit" name="delet" value="削除">';
        print'</form>';

    }
    catch(Exception $e)
    {
        print $e->getMessage();
        print'ただいま障害により大変なご迷惑をお掛けしております。';
        exit();
    }

    ?>
    </table>
    </div>
    </body>
</html>
