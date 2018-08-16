<<<<<<< HEAD:MWRL/login.php
<?php
  $targetUrl = $_GET['redUrl'];
  $username = $_GET['username'];
  $password = $_GET['password'];
  
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
                    <input type="email" name="" id="email" value="">
                    <br>
                    <label for="password">密码:</label>
                    <input type="password" name="" id="password" value="">
                    <br>
                    <label for="remember-me">
                      <input id="remember-me" type="checkbox">
                      记住密码
                    </label>
                    <br />
                    <div class="am-cf">
                      <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
                      <input type="submit" name="" value="忘记密码" class="am-btn am-btn-default am-btn-sm am-fr">
                    </div>
                  </form>
                </div>
              </div>

    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/amazeui.min.js"></script>
</body>
</html>