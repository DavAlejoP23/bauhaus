<?php include 'header.php'; ?>

<main>
    <section class="container__section">
        <div class="container__form--login">
            <h1 class="container__form--login--title">Iniciar Sesión</h1>
            <form class="container__form--login--structure" action="includes/login.inc.php" method="post">
                <div class="structure__input--field">
                    <input class="structure__input--field--label" type="text" name="mailuid">
                    <label class="label" for="email">Email</label>
                </div>

                <div class="structure__input--field">
                    <input class="structure__input--field--label" type="password" name="pwd">
                    <label class="label" for="password">Password</label>
                </div>
                <button class="linkMore" type="submit" name="login-submit">Inciar Sesión</button>
            </form>
            <div class="container__signup--structure">
                <h2 class="container__signup--structure--title">¿No tienes una cuenta?</h2>
                <a class="linkMore--alternative" href="signup.php">Registrate</a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>