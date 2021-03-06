<?php
     require('sqlConnect.php');

     session_start();
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-dtection" content="telephone=no">
    <meta name="keyword" content="">
    <meta name="descripion" content="ここに説明文を設定">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@twitteraccount">
    <meta property="og:site_name" content="サイト名">
    <meta property="og:title" content="サイトタイトル">
    <meta property="og:description" content="サイト説明文">
    <meta property="og:url" content="https://www.hogehoge.com">
    <meta property="og:image" content="https://www.hogehoge.com./hoge.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="400">
    <meta property="og:type" content="website">
    <link rel="shortcut icon" href="http://www.hoge.hoge/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="apple-touch-icon" href="http://www.hoge.hoge/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>るぴなす-マイページ</title>
  </head>
  <body>
    <header>
      <h1 class="logo"><a href="homepage.html"> <img src="img/logo.png" alt="logo"></a></h1>
      <nav class="gnavi_flex">
        <ul class="flex">
          <li class="li_h"><a href="board.html">掲示板を見る</a></li>
          <li class="li_h"><a href="#">診断をする</a></li>
          <li><a href="">るぴなすの<br>アプリについて</a></li>
          <li class="btn_login"><a id="btn_login_a" href="login.php">ログインする</a></li>
          <li class="login_logo"><img src="img/icon2.svg">
              <p><?php echo ($_SESSION["username"]) ?></p>
            </li>
        </ul>
      </nav>
    </header>
    <main>
    <input type="hidden" name="id" value="<?= $user['username']?>">
      <h2>マイページ</h2>
      <div class="serach"> 
        <input type="text" placeholder="自分と似た悩みを検索する"><span></span>
      </div>
      <div class="contentWrap"> 
        <div class="contentLeft"> 
          <div class="contents profileWrap">
            <h3>プロフィール</h3>
            <div class="profileFlex">
              <div class="profileInfo">
                <p class="name"><?php echo ($_SESSION["username"]) ?></p>
                <p class="age info"><?php echo ($_SESSION["age"]) ?><span><?php echo ($_SESSION["gender"]) ?></span></p>
                <p class="regiNum info">登録数<span>28</span></p>
                <p class="postNum info">投稿数<span>48</span></p>
              </div>
              <div class="profileIconWrap"><img src="img/icon2.svg" alt=""></div>
            </div>
            <section> 
              <h4>自己紹介</h4>
              <p><?php echo ($_SESSION["intro"]) ?></p>
            </section>
            <div class="mailBtn"> <a href="mypage_edit.php">プロフィール編集</a></div>
          </div>
          <div class="contents postWrap">
            <section> 
              <h3>投稿</h3>
              <div class="postDays">
                <div class="postDay"><a href="">
                    <time datetime="2021-02-10">2021.02.10<span>(2)</span></time></a></div>
                <div class="postDay"><a href="">
                    <time datetime="2021-04-16">2021.04.16<span>(4)</span></time></a></div>
                <div class="postDay"><a href="">
                    <time datetime="2021-06-21">2021.06.21<span>(2)</span></time></a></div>
              </div>
            </section>
          </div>
        </div>
        <div class="contentCenter">
          <div class="contents postListWrap">
            <h3>投稿一覧</h3><a href="#"> 
              <section>
                <h4>彼氏に打ち明けた方が良い…</h4>
                <p class="postTxt">付き合いだして３ヶ月目、彼氏の家でそういう雰囲気になり…</p>
                <p class="answer">うらやましいですね・・・<br>僕は童貞です。</p>
                <p class="postTime">2時間前</p>
                <p class="commentNum">コメント数2 </p>
              </section></a><a href="#"> 
              <section>
                <h4>彼氏に打ち明けた方が良い…</h4>
                <p class="postTxt">付き合いだして３ヶ月目、彼氏の家でそういう雰囲気になり…</p>
                <p class="answer">うらやましいですね・・・<br>僕は童貞です。</p>
                <p class="postTime">2時間前</p>
                <p class="commentNum">コメント数2 </p>
              </section></a><a href="#"> 
              <section>
                <h4>彼氏に打ち明けた方が良い…</h4>
                <p class="postTxt">付き合いだして３ヶ月目、彼氏の家でそういう雰囲気になり…</p>
                <p class="answer">うらやましいですね・・・<br>僕は童貞です。</p>
                <p class="postTime">2時間前</p>
                <p class="commentNum">コメント数2 </p>
              </section></a><a href="#"> 
              <section>
                <h4>彼氏に打ち明けた方が良い…</h4>
                <p class="postTxt">付き合いだして３ヶ月目、彼氏の家でそういう雰囲気になり…</p>
                <p class="answer">うらやましいですね・・・<br>僕は童貞です。</p>
                <p class="postTime">2時間前</p>
                <p class="commentNum">コメント数2 </p>
              </section></a><a href="#"> 
              <section>
                <h4>彼氏に打ち明けた方が良い…</h4>
                <p class="postTxt">付き合いだして３ヶ月目、彼氏の家でそういう雰囲気になり…</p>
                <p class="answer">うらやましいですね・・・<br>僕は童貞です。</p>
                <p class="postTime">2時間前</p>
                <p class="commentNum">コメント数2 </p>
              </section></a>
            <div class="pageBtn">
              <p> <a href="#"> 1</a></p>
              <p> <a href="#"> 2</a></p>
            </div>
          </div>
        </div>
        <div class="contentRight">
          <div class="contents hospitalWrap">
            <h3>病院登録</h3>
            <section> 
              <h4 class="red">三木病院</h4>
              <p class="num num2">大塚 正明</p>
              <p>浅井 波瑠</p>
              <p>小柄井 流花</p>
            </section>
            <section> 
              <h4 class="green">渡邊病院</h4>
              <p>犬井 奈津子</p>
              <p class="num num1">原井 朱里</p>
              <p>内藤 白亜</p>
            </section>
            <section> 
              <h4 class="blue">リョウ病院</h4>
              <p>小原 愛</p>
              <p class="num num2">小松 春菜</p>
            </section>
          </div>
          <div class="contents calendarWrap"></div>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer_flex">
        <ul>
          <li> <a href="board.html">掲示板を見る</a></li>
          <li> <a href="">診断する</a></li>
          <li> <a href="">アプリについて</a></li>
          <li> <a href="">婦人科の状況を見る</a></li>
          <li> <a href="">お問合わせ</a></li>
        </ul>
      </div>
      <p>&copy;Rupinasu All Rights Reserved. </p>
    </footer>
  </body>
</html>