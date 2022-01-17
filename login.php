<?php
    require('sqlConnect.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
                    //  "SELECT * FROM users WHERE email='$email' OR email='$email' LIMIT 1";<<test
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        
        if ($rows == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['age'] = $row['age'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['intro'] = $row['intro'];


            // echo'login successfully';
            header("location: mypage.php");

            exit();
            // Redirect to user dashboard page
          //   header("Location: dashboard.php");
        } else {
            echo "login fail";
        }
    } 
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
    <link rel="stylesheet" href="css/login.css">
    <title>るぴなす-ログイ</title>
  </head>
  <body> 
    <div class="bg">
      <header>
        <h1 class="logo"><a href="homepage.html"><img src="img/logo.png" alt="logo"></a></h1>
        <nav class="gnavi_flex">
          <ul class="flex">
            <li class="li_h"><a href="board.html">掲示板を見る</a></li>
            <li class="li_h"><a href="">診断をする</a></li>
            <li><a href="">るぴなすの<br>アプリについて</a></li>
            <li><a id="btn_login_a" href="">ログインする</a></li>
          </ul>
        </nav>
      </header>
      <div class="bg_warp">
        <div class="bg_warp_l">
          <div class="bg_warp_l_bg">
            <p></p>婦人科の先生にあなたが不安に思っていることを<br>相談することができます。<br>婦人科へのスムーズな予約対応や、家族へ妊娠した<br>事実を医師と共に伝えることができます。
          </div>
        </div>
        <div class="bg_warp_r">
          <div class="bg_warp_r_bg">
            <div class="bg_warp_r_bg_font">
            <form action="login.php" method="post" name="login">
                <div class="mail">
                  <p>メールアドレス</p>
                  <!-- <input type="text" name="email"> --><input type="text" name="email" autofocus="true"/>
                </div>
                <div class="password">
                  <p>パスワード</p>
                  <input type="password" name="password">
                </div>
                <p class="pass_for"> <a href=""> パスワードを忘れた人はこちら</a></p>
                <div class="bg_warp_r_bg_font_btn">
                  <!-- <input type="submit" name="email"> --><input type="submit" value="Login" name="submit">
                </div>
                <div class="bg_warp_r_bg_font_btn"><a class="register" href="registration.php">新規登録をする</a></div>
              </form>
              </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>