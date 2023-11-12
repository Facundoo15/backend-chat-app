<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="wrapper">
        <section class="form singup">
            <header>Aplicación de mensajeria</header>
            <form action="#">
                <div class="error-txt">
                    Este es un mensaje de error
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nombre</label>
                        <input type="text" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="field input">
                        <label>Apellidos</label>
                        <input type="text" placeholder="Ingresa tu apellido">
                    </div>
                </div>
                <div class="field input">
                    <label>Correo electrónico</label>
                    <input type="email" placeholder="Ingresa tu correo">
                </div>
                <div class="field input">
                    <label>Contraseña</label>
                    <input type="password" placeholder="Ingresa tu contraseña">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Imagen de perfil</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Registrarme">
                </div>
            </form>

            <div class="link">¿Ya te registraste? <a href="#">Iniciar sesión</a></div>


        </section>
    </div>

    <script src="javascript/ver-password.js"></script>


</body>

</html>