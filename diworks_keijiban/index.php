<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>
            diworksblog 掲示板
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");
        $stmt = $pdo ->query("select * from diworks_keijiban");
        ?>
        <header>
            <img class="logo" src="diblog_logo.jpg">
            <nav class="header">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>D.I.Blogについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </nav>
        </header>
        
        <div class="main-container">
            
        <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
            <div class="format">
            <h2 class="formtitle">入力フォーム</h2>
            <form action="insert.php" method="post"> 
             <p>
              ハンドルネーム<br>
              <input type="text" size="40px" name="handlename">
            </p>
            <p>
              タイトル<br>
              <input type="text" size="40px" name="title">
            </p>
            <p>
              コメント<br>
              <textarea rows="8" cols="70" name="comments"></textarea>
            </p>
              <input type="submit" class="submit" value="投稿する">
            </form>
            </div class>
           
            <?php
              while($row = $stmt ->fetch()){
              echo "<section>";
              echo "<h2>".$row['title']."</h2>";
              echo "<p>".$row['comments']."<br>";
              echo "posted by ".$row['handlename'];
              echo "</p></section>";
              }
            ?>
       
          
        </div>
        

        <div class="right">
            <h2>人気の記事</h2>
            <ul class="nav">
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>いま人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h2>オススメリンク</h2>
            <ul class="nav">
                <li>ディーアイワークス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <h2>カテゴリ</h2>
            <ul class="nav">
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
        </div>
        <footer>
        Copyright D.I.Works | D.I.blog is the one which provides A to Z about programming

        </footer>
    </body>
</html>