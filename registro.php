<?php include_once "php/header.php" ?>
<body>

    <div class="wrapper">
        <section class="form singup">
            <header>Aplicación de mensajeria</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nombre</label>
                        <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="field input">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" placeholder="Ingresa tu apellido" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Correo electrónico</label>
                    <input type="email" name="email" placeholder="Ingresa tu correo" required>
                </div>
                <div class="field input">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Imagen de perfil</label>
                    <input type="file" name="perfil">
                </div>
                <div class="field button">
                    <input type="submit" value="Registrarme">
                </div>
            </form>

            <div class="link">¿Ya te registraste? <a href="login.php">Iniciar sesión</a></div>


        </section>
    </div>

    <script src="javascript/ver-password.js"></script>
    <script src="javascript/ingresar.js"></script>


</body>

</html>