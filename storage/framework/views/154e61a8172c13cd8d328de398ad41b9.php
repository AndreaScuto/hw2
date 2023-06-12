
<html>
    <head>
        <link rel='stylesheet' href="<?php echo e(url('css/login.css')); ?>">
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

            <?php if($error): ?>
            <div class="error"><?php echo e($error); ?></div>
            <?php endif; ?>

            <form name='login' method='post'>
                <div class="username">
                    <label for='username'>Username</label>
                    <input type='text' name='username' value= "<?php echo e(old('username')); ?>">
                </div>
                <div class="password">
                    <label for='password'>Password</label>
                    <input type='password' name='password' value= "<?php echo e(old('password')); ?>">
                </div>
                <div class="submit-container">
                    <div class="login-btn">
                        <input type='submit' value="ACCEDI">
                    </div>
                </div>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            </form>
            <div class="signup"><h4>Non hai un account?</h4></div>
            <div class="signup-btn-container"><a class="signup-btn" href="<?php echo e(url('signup')); ?>">ISCRIVITI</a></div>
        </section>
        </main>
    </body>
</html><?php /**PATH C:\Users\Andrea\OneDrive - Università degli Studi di Catania\Desktop\portinghw1\hw2\resources\views/login.blade.php ENDPATH**/ ?>