<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>新規登録</title>

    </head>
    <body>
    <link rel="stylesheet" href="kojin_list.css" >
        個人情報追加<br />
        <form method="post" action="kojin_add_check.php">
            IDを入力してください。<br />
            <input type="text" name="ID" style="width:200px"><br />
            氏名を入力してください。<br />
            <input type="text" name="simei" style="width:200px"><br />
            ふりがなを入力してください。<br />
            <input type="text" name="hurigana" style="width:200px"><br />
            郵便番号を入力してください。<br />
            <input type="text" name="yuubinnbanngou" style="width:200px"><br />
            住所を入力してください。<br />
            <input type="text" name="jyuusyo" style="width:200px"><br />
            電話番号を入力してください。<br />
            <input type="text" name="dennwabanngou" style="width:200px"><br />
            Eメールアドレスを入力してください。<br />
            <input type="text" name="Email" style="width:200px"><br />
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="OK">
        </form>

    </body>
</html>
