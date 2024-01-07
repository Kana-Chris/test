<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>contactform</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>お問い合わせフォーム</h1>
        <form action="mail_confirm.php" method="post" >
            <p>
                <label>名前</label>
                <br>
                <input type="text" class="text" name="name" value="<?php if(!empty($_POST['name'])){
                    echo $_POST['name'];} ?>">
            </p>
            <p>
                <label>メールアドレス</label><br>
                <input type="text" class="text" name="mail" value="<?php if(!empty($_POST['mail'])){
                    echo $_POST['mail'];} ?>">
            </p>
            <p>
                <label>年齢</label>
                <br>
                <select class="dropdown" name="age">
                    <option><?php if(!empty($_POST['age'])){
                    echo $_POST['age'];
                    }else{
                        echo("選択してください");
                    }
                    ?></option>
                    <script>
                        for(var i=18;i<=65;i++){
                            document.write("<option value='"+i+"'>"+i+"</option>");
                        }
                    </script>
                </select>
                歳
            </p>
            <p>
                <label>コメント</label>
                <br>
                <textarea rows="4" cols="40" name="comment"><?php if(!empty($_POST['comment'])){
                    echo $_POST['comment'];} ?></textarea>
                <br>
                <input type="submit" class="submit" value="送信する">
            </p>
        </form>
    </body>
</html>