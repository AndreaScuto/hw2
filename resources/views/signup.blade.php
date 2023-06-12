
<html>
    <head>
        <link rel='stylesheet' href="{{url('css/signup.css')}}">
        <script src="{{url('js/signup.js')}}" defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
         <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <title>Iscriviti</title>
    </head>
    <body>
        <div id="logo">
        <img src="images/logoF.png">
        </div>
        <main>
        <section class="main_left">
        </section>
        <section class="main_right">
            <h1>Iscriviti gratuitamente</h1>

            @if($error)
            <div class="errore">{{$error}}</div>
            @endif

            <form name='signup' method='post' enctype="multipart/form-data" autocomplete="off">
                <div class="names">
                    <div class="name">
                        <label for='name'>Nome</label>
                        <input type='text' name='name'  value = '{{old("name")}}' >
                    </div>
                    <div class="surname">
                        <label for='surname'>Cognome</label>
                        <input type='text' name='surname' value = '{{old("surname")}}'  >
                    </div>
                </div>
                <div class="username">
                    <label for='username'>Nome utente</label>
                    <input type='text' name='username' value = '{{old("username")}}'>
                </div>
                <div class="password">
                    <label for='password'>Password</label>
                    <input type='password' name='password'>
                </div>
                <div class="confirm_password">
                    <label for='confirm_password'>Conferma Password</label>
                    <input type='password' name='confirm_password'>
                </div>
                <div class="submit">
                    <input type='submit' value="Registrati" id="submit">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <div class="signup">Hai un account? <a href="{{url('login')}}">Accedi</a>
        </section>
        </main>
    </body>
</html>