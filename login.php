
<!-- App de mensajeria -->
<?php include_once "php/header.php" ?>
<body>

    <div class="wrapper">
        <section class="form login">
            <header>Aplicación de mensajeria</header>
            <form action="#">
                <div class="error-txt">
                </div>
                <div class="field input">
                    <label>Correo electrónico</label>
                    <input type="email" name="email" placeholder="Ingresa tu correo">
                </div>
                <div class="field input">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="Ingresa tu contraseña">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Iniciar sesión">
                </div>
            </form>

            <div class="link">¿Aún no te has registrado?  <a href="registro.php">Registrarme ahora</a></div>


        </section>
    </div>



    <script src="javascript/ver-password.js"></script>
    <script src="javascript/login.js"></script>

</body>

</html>