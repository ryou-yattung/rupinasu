<?php
     require('sqlConnect.php');
     session_start();
    
     if(isset($_REQUEST['email'])){
          $username = stripslashes($_REQUEST['username']);
          $username = mysqli_real_escape_string($con, $username);

          $email    = stripslashes($_REQUEST['email']);
          $email    = mysqli_real_escape_string($con, $email);
          
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con, $password);

          $age = stripslashes($_REQUEST['age']);
          $age = mysqli_real_escape_string($con, $age);

          $radio = stripslashes($_REQUEST['radio']);
          $radio = mysqli_real_escape_string($con, $radio);

          $query    = "INSERT into `users` (username, password, email, age, radio)
                         VALUES ('$username', '" . md5($password) . "', '$email', '$age', '$radio')";
                         
          $result   = mysqli_query($con, $query);

          // if($result){
          //      echo "registered successfully";
          // }else{
          //      echo "Required fields";
          // }
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
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&amp;display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/registration.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/registration.js"> </script>
    <title>るぴなす-新規登録</title>
  </head>
  <body> 
    <div class="bg">
      <header>
        <h1 class="logo"><a href="homepage.html"> <img src="img/logo.png" alt="logo"></a></h1>
        <nav class="gnavi_flex">
          <ul class="flex">
            <li class="li_h"><a href="board.html">掲示板を見る</a></li>
            <li class="li_h"><a href="#">診断をする</a></li>
            <li><a href="">るぴなすの<br>アプリについて</a></li>
            <li class="login_btn"><a id="btn_login_a" href="login.php">ログインする</a></li>
            <li class="login_logo"><img src="img/icon2.svg">
              <p>みーちゃん</p>
            </li>
          </ul>
        </nav>
      </header>
    </div>
    <div class="acc">
      <div class="acc_form">
        <form action="registration.php"> 
          <div class="acc_form_name acc_form_margin">
            <h2>表示名 </h2>
            <p>匿名の掲示板に表示されるニックネームです。</p><input type="text" name="username" placeholder="例：みーちゃん" required />
          </div>
          <div class="acc_form_name acc_form_margin">
            <h2>氏名(全角)</h2>
            <p>こちらの氏名は公開されません。</p><input type="text" name="first_name" id="first_name" placeholder="例：朝原　南" required>
          </div>
          <div class="acc_form_name acc_form_margin">
            <h2>氏名カナ(全角)</h2>
            <p>こちらの氏名は公開されません。</p><input type="text" name="name_kara" id="name_kara" placeholder="例：アサハラ　ミナミ" required>
          </div>
          <div class="sex acc_form_margin">
            <h2>性別</h2>
            <input type="radio" name="radio" value="男" /> 
            <label class="men" for="">男</label>
            <input type="radio" name="radio" value="女" /> 
            <label for="">女</label>
          </div>
          <div class="birthday acc_form_margin">
            <h2>生年月日</h2>
            <div class="bir"> 
              <div class="bir_after">
                <select id="year" name="year">
                  <option value="0"></option>
                </select>
              </div>
              <div class="bir_after">
                <select id="month">
                  <option value="0"></option>
                </select>
              </div>
              <select id="date">
                <option value="0"> </option>
              </select>
            </div>
          </div>
          <div class="age acc_form_margin age">
            <h2>年齢</h2>
            <select id="age" name="age">
              <option value="0"></option>
            </select>
          </div>
          <div class="acc_form_phoneNum acc_form_margin">
            <h2>電話番号</h2>
            <p>半角数字(ハイフン「-」なし)で入力して下さい。</p><input type="text" name="phoneNum" id="phoneNum" placeholder="例：12345678910" required>
          </div>
          <div class="acc_form_phoneNum acc_form_margin">
            <h2>メールアドレス(半角英数字)</h2><input type="text" name="email" id="email" placeholder="例：mimimi0123@ecccomp.com">
          </div>
          <div class="acc_form_phoneNum acc_form_margin">
            <h2>メールアドレス(確認)</h2><input type="text" name="mail_confirm" id="mail_confirm" placeholder="例：mimimi0123@ecccomp.com" required>
          </div>
          <div class="acc_form_password acc_form_margin">
            <h2>パスワード</h2>
            <p>６文字以上の半角英数字で入力して下さい</p>
            <div class="password_i"><input type="password" name="password" id="password" placeholder="パスワード入力" required>
<i class="toggle-pass fa fa-eye-slash"></i>
            </div>
          </div>
          <div class="acc_form_passwordConfirm acc_form_margin">
            <h2>パスワード(確認)</h2>
            <p>６文字以上の半角英数字で入力して下さい</p>
            <div class="password_i"><input type="password" name="password_confirm" id="password_confirm" placeholder="パスワード入力" required>
<i class="toggle-pass fa fa-eye-slash"></i>
            </div>
          </div>
          <div class="acc_form_confirm acc_form_margin"><input type="checkbox" id="confirm"/>
            <label for="confirm">「個人情報の取り扱いについて」と「るぴなすの利用規約」に同意する</label>
          </div>
          <div class="acc_form_btn">
            <input type="submit" name="submit" value="登録する">
          </div>
        </form>
      </div>
    </div>
    <footer> 
      <p>&copy;Rupinasu All Rights Reserved. </p>
    </footer>
  </body>
</html>