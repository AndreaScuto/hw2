
<html>
    <head>
        <link rel='stylesheet' href="<?php echo e(url('css/signup.css')); ?>">
        <script src="<?php echo e(url('js/signup.js')); ?>" defer></script>
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

            <?php if($error): ?>
            <div class="errore"><?php echo e($error); ?></div>
            <?php endif; ?>

            <form name='signup' method='post' enctype="multipart/form-data" autocomplete="off">
                <div class="names">
                    <div class="name">
                        <label for='name'>Nome</label>
                        <input type='text' name='name'  value = '<?php echo e(old("name")); ?>' >
                    </div>
                    <div class="surname">
                        <label for='surname'>Cognome</label>
                        <input type='text' name='surname' value = '<?php echo e(old("surname")); ?>'  >
                    </div>
                </div>
                <div class="username">
                    <label for='username'>Nome utente</label>
                    <input type='text' name='username' value = '<?php echo e(old("username")); ?>'>
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
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            </form>
            <div class="signup">Hai un account? <a href="<?php echo e(url('login')); ?>">Accedi</a>
        </section>
        </main>
    </body>
</html><?php /**PATH C:\Users\Andrea\OneDrive - Università degli Studi di Catania\Desktop\portinghw1\hw2\resources\views/signup.blade.php ENDPATH**/ ?>