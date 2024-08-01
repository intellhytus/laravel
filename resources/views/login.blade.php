<html>
<header>
    <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</header>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="home" ><i class="far fa-user"></i> Retornar</a></li>
            </ul>
        </div>
    </div>
</nav>

    <div class="login">
        <h1>Login</h1>
        <form method="post" action="{{route('registro')}}">
            @csrf
            <input type="text" name="user" placeholder="Username" required="required" />
            <input type="password" name="pass" placeholder="Password" required="required" style="margin-top: 10px"/>
            <input type="text" name="email" placeholder="Email" required="required" style="margin-top: 10px"/>
            <button type="submit" class="btn btn-primary btn-block btn-large" style="margin-top: 10px">Entrar</button>
            <button type="submit" class="btn btn-primary btn-block btn-large" style="margin-top: 10px">Registrar-se</button>
        </form>
    </div>

</body>
</html>
