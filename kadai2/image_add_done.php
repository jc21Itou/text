<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>画像登録</title>
        <h1>画像登録<h1>
    </head>
    <body bgcolor="#f0ffff">
    <link rel="stylesheet" href="image_add_done.css" >


        <?php

        try
        {

            $image_title = $_POST['title'];
            $image_description = $_POST['description'];
            $image_file_name = $_POST['file'];

            $image_title = htmlspecialchars($image_title,ENT_QUOTES,'UTF-8');
            $image_description = htmlspecialchars($image_description,ENT_QUOTES,'UTF-8');

            $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql = 'INSERT INTO image(title,description,file) VALUES (?,?,?)';
            $stmt = $dbh->prepare($sql);
            $data[] = $image_title;
            $data[] = $image_description;
            $data[] = $image_file_name;
            $stmt->execute($data);

            $dbh = null;

            print $image_title;
            print'を追加しました。<br />';

        }
        catch (Exception $e)
        {
            print $e->getMessage();
            print'ただいま障害により大変ご迷惑をおかけしております。';
            exit();
        }
        
        ?>

        <a href="image_list.php">戻る</a>

    </body>
</html>
