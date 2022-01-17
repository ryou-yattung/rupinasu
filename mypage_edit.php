<?php
    require('sqlConnect.php');
    session_start();

    if(isset($_REQUEST['id'])){
      var_dump($_REQUEST['id']);
      $id = stripslashes($_REQUEST['id']);
      $id = mysqli_real_escape_string($con, $id);



      // $img = stripslashes($_REQUEST['img']);
      // $img = mysqli_real_escape_string($con, $img);

      $username = stripslashes($_REQUEST['username']);
      $username = mysqli_real_escape_string($con, $username);

      $age = stripslashes($_REQUEST['age']);
      $age = mysqli_real_escape_string($con, $age);

      $gender = stripslashes($_REQUEST['gender']);
      $gender = mysqli_real_escape_string($con, $gender);

      $intro = stripslashes($_REQUEST['intro']);
      $intro = mysqli_real_escape_string($con, $intro);

      $query = "
        UPDATE 
          users
        SET 
          username = '{$username}',

          age = '{$age}',
          gender = '{$gender}',
          intro = '{$intro}'
        WHERE
          id = {$id}
      ";
                    
      $result = mysqli_query($con, $query);

      if($result){
        $query = "SELECT * FROM users WHERE id = {$id}";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['username'] = $row['username'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['intro'] = $row['intro'];
        // $_SESSION['img'] = $row['img'];

          // echo "successfully";
          header("location: mypage.php");
          exit;
      }else{
          echo "fields";
          // print $query;
          exit;
      }
    }
    else{
      $email = $_SESSION['email'];
      $email    = stripslashes($email);
      $email    = mysqli_real_escape_string($con, $email);
      $query = "SELECT * FROM users WHERE email = '{$email}'";
      $result = mysqli_query($con, $query);
      $user = [];
      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $user = $row;
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
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&amp;display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mypage_edit.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mypage_edit.js"> </script>
    <title>プロフィール編集 </title>
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
          <li class="login_logo"><img src="img/icon2.svg" alt="icon">
            <p><?php echo ($_SESSION["username"]) ?></p>
          </li>
        </ul>
      </nav>
    </header>
    <main> 
      <h2>マイページ</h2>
      <div class="profileBg">
        <form action="mypage_edit.php" method="post">
          <input type="hidden" name="id" value="<?= $user['id']?>">

          <div class="iconWrap"> 
            <label for="img"> 
              <img id="preview" src="" alt="">
              <input id="img" type="file" name="img">
            </label>
            <p>プロフィール写真を変更</p>
          </div>
          <div class="profileWrap"> 
            <div class="name form_left">   
              <label for="username">名前</label>
              <input type="text" name="username" placeholder="例：みーちゃん" required />
            </div>
            <div class="age form_left"> 
              <label for="age">年齢</label>
              <input type="text" placeholder="18" maxlength="2" name="age" id="age">
            </div>
            <div class="gender form_left"> 
              <label>性別</label>
              <div class="gender_input">
                <input type="radio" name="gender" id="gender" value="男性">
                <label for="gender">男性</label>
              </div>
              <div class="gender_input">
                <input type="radio" name="gender" id="gender" value="女性">
                <label for="gender">女性</label>
              </div>
            </div>
            <div class="introWrap">
              <label class="form_left" for="intro">自己紹介   </label><textarea name="intro" id ="intro" placeholder="初めまして！彼氏が禿げてます。登録したばかりで分からないことが沢山ありますがよろしくお願いします。"></textarea>
            </div>
            <div class="btnWrap"> 
              <div class="cancel btn">
                <input type="reset" value="キャンセル">
              </div>
              <div class="submit btn">
                <input type="submit" value="変更する">
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>