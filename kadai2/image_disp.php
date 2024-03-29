<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>画像の表示</title>
        <div class="box1"><h1>画像の表示</h1></div>
    </head>
    <body bgcolor="#f0ffff">
    
    <link rel="stylesheet" href="image_disp.css" >
    <dev class="box1">
        
    <?php

    try
    {

        $image_ID=$_GET['ID'];

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT title,description,file FROM image WHERE ID=?';
        $stmt = $dbh->prepare($sql);
        $data[]=$image_ID;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $image_title=$rec['title'];
        $image_description=$rec['description'];
        $image_file_name=$rec['file'];

        $dbh = null;

        if($image_file_name=='')
        {
            $disp_gazou='';
        }
        else
        {
            $disp_gazou='<img src="./image/'.$image_file_name.'">';
        }

    }
    catch(Exception $e)
    {
        print $e->getMessage();
        print'ただいま障害により大変ご迷惑をおかけしております。';
        exit();
    }

    ?>

    <br />
    <tr>
    <br />
    【タイトル】<br />
    <?php print $image_title;?>
    <br />
    【説明】<br />
    <?php print $image_description;?>
    <br />
    <?php print $disp_gazou; ?>
    <br />
    <form>

    <input type="button" onclick="history.back()"value="戻る">
    
</form>
</table>
    </div>
    </body>
</html>
