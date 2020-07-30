<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<?php
	 
   mb_internal_encoding("utf8");
   $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
   $stmt = $pdo->query("select*from 4each_keijiban");
	 
  ?>


<body>

    <header>

        <div class="img"><img src="4eachblog_logo.jpg"></div>
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>


    <main>




        <div class="maincontainer">

            <div class="left">
                <div class="h1">プログラミングに役立つ掲示板</div>

                <form action="insert.php" method="post">
                    <div>
                        <h5>入力フォーム</h5>

                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="60" name="handlename">
                    </div>

                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="60" name="title">
                    </div>

                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="60" rows="7" name="comments">
	 </textarea>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>

                </form>




                <?php
	
while($row=$stmt->fetch()){
	 
		 echo "<div class='kiji'>";
		 echo "<h3>".$row['title']."</h3>";
		 echo "<div class='contents'>";
		 echo $row['comments'];
		 echo "<div class='handlename'>posted by".$row['handlename']."</div>";
		 echo "</div>";
		 echo "</div>";
}
		
?>


            </div>


            <div class="right">
                <h2 class="osusume">人気の記事</h2>
                <ul>
                    <p>
                        <li>PHPオススメ本</li>
                    </p>
                    <p>
                        <li>PHP Myadminの使い方</li>
                    </p>
                    <p>
                        <li>今人気のエディタ Top5</li>
                    </p>
                    <p>
                        <li>HTMLの基礎</li>
                    </p>
                </ul>
                <h2 class="osusume">オススメリンク</h2>
                <ul>
                    <p>
                        <li>インターノウス株式会社</li>
                    </p>
                    <p>
                        <li>XAMPPのダウンロード</li>
                    </p>
                    <p>
                        <li>Eclipseのダウンロード</li>
                    </p>
                    <p>
                        <li>Bracketsのダウンロード</li>
                    </p>
                </ul>
                <h2 class="osusume">カテゴリ</h2>
                <ul>
                    <p>
                        <li>HTML</li>
                    </p>
                    <p>
                        <li>PHP</li>
                    </p>
                    <p>
                        <li>MySQL</li>
                    </p>
                    <p>
                        <li>JavaScript</li>
                    </p>
                </ul>
            </div>
        </div>
    </main>


    <footer>
        copyrightcinternous|4each blog is the one which provides A to Z about　programming.
    </footer>


</body>
