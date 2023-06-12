
<html>
  <head>
    <link rel="stylesheet" href= "{{url('css/home.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src="{{url('js/home.js')}}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Report Scuderia Ferrari Formula 1</title>
  </head>

  <body>
    <header>
      <div class="menu">
        <div></div>
        <div></div>
        <div></div>
      </div>

      <nav class="NavigationBar">
        <a id="Bottone" href="{{url('home')}}">Home</a>
        <a id="Bottone" href="{{url('archivio')}}">Archivio F1</a>
        <a id="Bottone" href="{{url('profile')}}">Account</a>
      </nav>

      <h1 class="TitoloH">Report Scuderia Ferrari F1</h1>
    </header>

    <figure class="Avatar">
      <img src="images/player.png" class="ImmAvatar" />
      <figcaption id="InfoAvatar"><br />{{ $user->nome . ' ' . $user->cognome }}</figcaption>
    </figure>

    <form id="articoliFORM">
     <input id="articoliINPUT" name="titoloCERCATO" type="text" placeholder="Cerca un articolo..." required >
     <input id="articoliSUBMIT" type="submit"value="">
    </form>

    <section>

      <div class="Contenitore" id = "contenitoreRICERCA">
        <article class="Articolo">
          <h1 class="TitoloA" id= "titoloRIEMPI"></h1>
          <p class="Testo" id="testoRIEMPI"></p>
          <img src="" class="ImmArticolo" id ="imgRIEMPI"/>
        </article>
      </div>
    </section>

    <section id="sectionULTIMI3">
    
    </section>
    <footer>Fatto da Andrea Scuto matricola 100015891</footer>
  </body>
</html>
