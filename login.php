<?php include 'header.php'; ?>

<main>
    <section class="container__section">
        <div class="container__form--login">
            <h2 class="container__form--login--title">Iniciar Sesión</h2>
            <form class="container__form--login--structure" action="includes/login.inc.php" method="post">
                <div class="structure__input--field">
                    <input class="structure__input--field--label" type="text" name="mailuid">
                    <label class="label" for="email">Email</label>
                </div>

                <div class="structure__input--field">
                    <input class="structure__input--field--label" type="password" name="pwd">
                    <label class="label" for="password">Password</label>
                </div>
                <button type="submit" name="login-submit">Inciar Sesión</button>
            </form>
            <a href="signup.php">Signup</a>
            <a href="reset-password.php">Forgot your password?</a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>