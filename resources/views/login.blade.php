
<html>
    <head>
        <link rel='stylesheet' href="{{url('css/login.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
         <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
    </head>
    <body>
        <div id="logo">
           <img src="images/logoF.png">
        </div>
        <main class="login">
        <section class="main">
            <h5>Per continuare, inserisci i tuoi dati.</h5>

            @if($error)
            <div class="error">{{$error}}</div>
            @endif

            <form name='login' method='post'>
                <div class="username">
                    <label for='username'>Username</label>
                    <input type='text' name='username' value= "{{old('username')}}">
                </div>
                <div class="password">
                    <label for='password'>Password</label>
                    <input type='password' name='password' value= "{{old('password')}}">
                </div>
                <div class="submit-container">
                    <div class="login-btn">
                        <input type='submit' value="ACCEDI">
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <div class="signup"><h4>Non hai un account?</h4></div>
            <div class="signup-btn-container"><a class="signup-btn" href="{{url('signup')}}">ISCRIVITI</a></div>
        </section>
        </main>
    </body>
</html>