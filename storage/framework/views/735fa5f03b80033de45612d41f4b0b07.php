
<html>
    <head>
        <link rel='stylesheet' href="<?php echo e(url('css\profile.css')); ?>">
        <script src="<?php echo e(url('js\profile.js')); ?>" defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
         <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <title>Il mio profilo</title>
    </head>

    <body>
    </div>
        <header>
            <nav>
                <div class="nav-container">
                    <div id="logo">
                         <img src="images/logoF.png">
                    </div>
                    <div id="links">
                        <a href="<?php echo e(url('home')); ?>" class="button">HOME</a>
                        <a href="<?php echo e(url('logout')); ?>" class='button'>LOGOUT</a>
                    </div>
                    <div id="menu">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="userInfo">
                    <h1><?php echo e($user->nome . ' ' . $user->cognome); ?></h1>
                </div>               
            </nav>
        </header>

    <section id="container">

    </section>

    

</body>
</html>
<?php /**PATH C:\Users\Andrea\OneDrive - Università degli Studi di Catania\Desktop\portinghw1\hw2\resources\views/profile.blade.php ENDPATH**/ ?>