
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Авторизация</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta content="themes-lab" name="author" />
        <link rel="shortcut icon" href="/assets/img/favicon.png">
        <link href="/assets/css/style.css" rel="stylesheet">
        <link href="/assets/css/ui.css" rel="stylesheet">
        <link href="/assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    </head>
    <body class="account" data-page="login">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03"></i>
                        <form class="form-signin" role="form" action="{{route('get_login')}}" method="post">
                            @csrf
                            <div class="append-icon">
                                <input type="text" name="email" id="name" class="form-control form-white username" placeholder="Логин" required>
                                <i class="icon-user"></i>
                            </div>
                            <div class="append-icon m-b-20">
                                <input type="password" name="password" class="form-control form-white password" placeholder="Пароль" required>
                                <i class="icon-lock"></i>
                            </div>
                            <button type="submit" id="submit-form" class="btn btn-lg btn-danger btn-block ladda-button" data-style="expand-left">Войти</button>
                        
                        </form>
                      
                    </div>
                </div>
            </div>
            <p class="account-copyright">
                <span>Copyright © 2020 </span><span>M2A Solutions</span>.<span>All rights reserved.</span>
            </p>
            
        </div>
        <script src="/assets/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="/assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="/assets/plugins/gsap/main-gsap.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/plugins/backstretch/backstretch.min.js"></script>
        <script src="/assets/plugins/bootstrap-loading/lada.min.js"></script>
     
    </body>
</html>