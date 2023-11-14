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
        <section class="chat-area">
            <header>
                <?php
                $id_unique = $_SESSION['id_unique'];
                $id_usuario = $_GET['id_usuario'];
                $usuario = API_USUARIO::buscarUsuario($id_usuario);
                ?>


                <div class="content">
                    <a href="usuarios.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
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
            </header>

            <div class="chat-box">
            </div>


            <form action="" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['id_unique'] ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $id_usuario ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Escribe un mensaje aquí">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>


        </section>
    </div>



    <script src="javascript/chat.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>