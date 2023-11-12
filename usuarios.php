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
        <section class="users">
            <header>
                <div class="content">
                    <img src="#" alt="">
                    <div class="details">
                        <span>
                            Coding Nepal
                        </span>
                        <p>Active now</p>
                    </div>

                </div>

                <a href="#" class="logout">Cerrar sesión</a>
            </header>

            <div class="search">
                <span class="text">Escribe el nombre de un usuario</span>
                <input type="text" placeholder="Usuario para buscar">
                <button><i class="fas fa-search"></i></button>
            </div>

            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="assets/JEANPI.PNG" alt="">
                        <div class="details">
                            <span>Favio angulo</span>
                            <p>Este es un mensaje</p>
                        </div>
                    </div>

                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>


                <a href="#">
                    <div class="content">
                        <img src="#" alt="">
                        <div class="details">
                            <span>Favio angulo</span>
                            <p>Este es un mensaje</p>
                        </div>
                    </div>

                    <div class="status-dot"><i class="fa fa-circle"></i></div>
                </a>


            </div>


        </section>
    </div>


    <script src="javascript/usuarios.js"></script>


</body>

</html>