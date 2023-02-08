<!DOCTYPE thml>
<html lang="ja">
<html>

<head>
    <meta charset="UTF-8">
    <title>画像ライブラリ</title>
    <link rel="stylesheet" href="image_add.css">
</head>


<body bgcolor="#f0ffff">
    <div class="box1">
        <h1>画像ライブラリ</h1>
    </div>
    <table border="1" style="border-collapse: collapse" cellpadding="10" align="center">
        <div class="box1">
            画像登録<br />
            <br />
            <form method="post" action="image_add_check.php" enctype="multipart/form-data">
                画像のタイトル<br />
                <input type="text" name="title" style="width:200px"><br />
                画像の説明<br />
                <input type="text" name="description" style="width: 500px" style="height: 100px"><br />
                画像ファイルの選択<br />
                <input type="file" name="gazou" style="width:400px"><br />
                <button type="button" onclick="history.back()">戻る</button>
                <button type="submit">OK</button>
            </form>
        </div>
    </table>
</body>

</html>