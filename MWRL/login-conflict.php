<?php
 function openJason($path)
 {
     if(file_exists($path)==false)
     {
        echo '<script>alert("Unknown Error! Connect the admin");
            location.href="http://39.104.90.230/5308/"</script>';
     }
     else
     {
        $s = file_get_contents($path);
        $json = json_decode($s, true);
     }
     return $json;
 }

 function sCookie($usrName,$usrKey, $random)
 {
   setcookie("userName", $usrName, time()+3600*24*30);
   setcookie("userKey", $usrKey, time()+3600*24*30);
   setcookie("CC", $random, time()+3600*24*30);
 }

?>

<?php
                if($_COOKIE[''])
                if($_POST['submit'])
                {
                  $usrname = $_POST['usrname'];
                  $password = $_POST['password'];
                  if($usrname == '' || $usrname == ' ' )
                  {
                        $usrname = null;
                  }
                
                  $PASpath='./password.json';
                  
                  $json = openJason($PASpath);
                  if($json[$usrname] == $password)
                  {
                    $setR = rand(0,255) + rand(0,255) + rand(0,255);
                    sCookie($usrname, md5(md5($password) + md5($setR)), $setR);
                  }
                }
                ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>login - Yangtze 5308</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/amazeui.css">
  
</head>
<body>

    <header class="t5308-login-header">
        <h1>M&amp;WRL</h1>

     </header>


        <div class="am-g">
                <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
                  <h3>登录</h3>
                  <hr>
                  <div class="am-btn-group">
                    <a href="#" class="am-btn am-btn-secondary am-btn-sm"><i class="am-icon-github am-icon-sm"></i> Github</a>
                    <a href="#" class="am-btn am-btn-success am-btn-sm"><i class="am-icon-google am-icon-sm"></i> 5308 +</a>
                  </div>
                  <br>
                  <br>
              
                  <form method="post" class="am-form">
                    <label for="email">邮箱:</label>
                    <input type="email" name="usrname" id="email" value="">
                    <br>
                    <label for="password">密码:</label>
                    <input type="password" name="password" id="password" value="">
                    <br>
                    <label for="remember-me">
                      <input id="remember-me" type="checkbox">
                      记住密码
                    </label>
                    <br />
                    <div class="am-cf">
                      <input type="submit" name="submit" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
                      <input type="submit" name="" value="忘记密码" class="am-btn am-btn-default am-btn-sm am-fr">
                    </div>
                  </form>
                </div>
              </div>
              

    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/amazeui.min.js"></script>
</body>
</html>