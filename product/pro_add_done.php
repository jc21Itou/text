<!DOCTYPE thml>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>

        <?php

        try
        {

            $prp_name = $_POST['name'];
            $pro_priec = $_POST['priec'];

            $pro_name = htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
            $pro_price = htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');

            $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql = 'INSERT INTO mst_product(name,price) VALUES (?,?)';
            $stmt = $dbh->prepare($sql);
            $data[] = $pro_name;
            $data[] = $pro_price;
            $stmt->execute($data);

            $dbh = null;

            print $pro_name;
            print'を追加しました。<br />';

        }
        catch (Exception $e)
        {
            print'ただいま障害により大変ご迷惑をおかけしております。';
            exit();
        }
        
        ?>

        <a href="pro_list.php">戻る</a>

    </body>
</html>