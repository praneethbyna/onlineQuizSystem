<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/font-linearicons.css"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/owl.transitions.css"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/owl.theme.css"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/theme.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/pxlquiz/css/responsive.css" media="all"/>

    <script type="text/javascript" src="/pxlquiz/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="/pxlquiz/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/pxlquiz/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="/pxlquiz/js/jquery-ui.js"></script>
<script type="text/javascript" src="/pxlquiz/js/owl.carousel.js"></script>
<script type="text/javascript" src="/pxlquiz/js/theme.js"></script>

    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div class="wrap">
  <div class="container">
    <div id="header">
      <div class="header">
        <div class="row">
          <div class="col-md-4 ">
            <div class="logo">
              <img src="/pxlquiz/images/pixel.png" alt="PIXEL" />
            </div>

          </div>

          <div class="col-md-4 ">
            <div >
              <h1>Quizophile</h1>
            </div>
          </div>


          <div class="col-md-4 ">
            &nbsp
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>

        <form action="usercheck.php" method="POST">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="pixelid" type="text" required class="validate" autocomplete="on" name="pixelid">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off" name="pwd">
            </div>

           <br />

            <input type="submit" value="Log In" />
        </form>

        

        
    </div>
</body>

</html>
