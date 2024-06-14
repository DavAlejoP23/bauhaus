<?php include 'header.php'; ?>

<main>
    <section class="container__section">
        <div class="container__form--signup">
            <h1 class="container__form--signup--title">¿No tienes una cuenta?</h1>
            <form class="container__form--signup--structure" action="includes/signup.inc.php" method="post">
                <div class="structure__input--field">
                    <input class="structure__input--field--label" type="text" name="fname">
                    <label class="label" for="fname">Nombre</label>
                    <span class="error"></span>
                </div>

                <div class="structure__input--field">
                    <input class="structure__input--field--label" type="text" name="lname">
                    <label class="label" for="lname">Apellido</label>
                    <span class="error"></span>
                </div>

                <div class="structure__input--field">
                    <input class="structure__input--field--label" type="text" name="mailuid">
                    <label class="label" for="email">Email</label>
                    <span class="error"></span>
                </div>

                <div class="structure__input--field">
                    <input class="structure__input--field--label" type="password" name="pwd">
                    <label class="label" for="password">Password</label>
                    <span class="error"></span>
                </div>

                <div class="structure__input--field">
                    <input class="structure__input--field--label" type="password" name="pwd-repeat">
                    <label class="label" for="pwd-repeat">Repetir Password</label>
                    <span class="error"></span>
                </div>

                <button class="linkMore" type="submit" name="signup-submit">Registrarte</button>
            </form>
        </div>
    </section>
</main>

<script type="text/javascript" src="assets/js/signup.js"></script>
<?php include 'footer.php'; ?>