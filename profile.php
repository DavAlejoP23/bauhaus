<?php include 'header.php'; ?>

<main>
    <section class="container__section">
        <h1>Bienvenido, <?php echo $_SESSION['fname']; ?></h1>
        <p>Nombre: <?php echo $_SESSION['fname']; ?></p>
        <p>Apellido: <?php echo $_SESSION['lname']; ?></p>
        <p>Email: <?php echo $_SESSION['mailuid']; ?></p>
        <p><a class="linkMore--alternative" href="includes/logout.inc.php">Cerrar sesión</a></p>
    </section>
</main>


<?php include 'footer.php'; ?>