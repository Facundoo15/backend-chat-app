<?php

include_once "php/api_usuarios.php";

session_start();
if (!isset($_SESSION['id_unique'])) {
    header('location: login.php');
}
?>

<?php include_once "php/header.php" ?>

<body>

    <div class="wrapper">
        <section class="users">
            <header>

                <?php
                $id_unique = $_SESSION['id_unique'];
                $usuario = API_USUARIO::buscarUsuario($id_unique);
                ?>

                <div class="content">
                    <img src="php/img/<?php echo $usuario['img'] ?>" alt="">
                    <div class="details">
                        <span>
                            <?php echo $usuario['nombre'] . " " . $usuario['apellidos'] ?>
                        </span>
                        <p>
                            <?php echo $usuario['status'] ?>
                        </p>
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
               
            </div>


        </section>
    </div>


    <script src="javascript/usuarios.js"></script>


</body>

</html>