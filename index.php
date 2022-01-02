<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreTech</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
    <?php 
    session_start();
    if (!isset($_SESSION["idusuario"])) {
        ?>
            <script>
                $(window).on('load',function(){
                    $('#bg-modal').fadeIn(350);
                })
                function fecharModal(){
                    $('#bg-modal').fadeOut(350);
                }
            </script>
        <?php
    } 
    ?>
    
<body>
    <div class="nav-menu">
        <div class="logo">
            <img src="img/LogoMakr.png">
        </div>
        <div class="links-menu">
            <?php 
                
                if (!isset($_SESSION["idusuario"])) {
                    ?>
                        <a href="login.php">Logar-se</a>
                        <a href="cadastrar.php">Cadastrar-se</a>
                    <?php
                } else {
                    ?>
                        <a href="logout.php">Encerrar sessão</a>
                    <?php
                }
            ?>
            
        </div>
        <div class="social-media">
            <div class="media">
                <img src="img/facebook.png">
            </div>
            <div class="media">
                <img src="img/mail.png">
            </div>
            <div class="media">
                <img src="img/insta.png">
            </div>
        </div>
    </div>
    <div class="background-bar">
        <h1 class="title-form">Confira nossa loja</h1>
    </div>
    <div class="box-cards">
        <a href="cadastro.php" class="card-button">Cadastros</a>
        <a href="listagem.php" class="card-button">Listagem</a>
    </div>
    <div class="footer"></div>
    <div class="sub-footer">
        <h1>* Para cadastrar algo, é necessário ter acesso de usuário (login) *</h1>    
    </div>

    <div class="bg-modal" id="bg-modal">
        <div class="modal" id="modal">
            <div class="bar-modal">
                <h1>Entrar</h1>
                <span class="close" onclick="fecharModal()">&times;</span>
            </div>
            <div class="form-box">
                <form action="controles/usuario/logar.php" method="POST">
                    <label for="Email">Email:</label>
                    <input type="text" name="email" class="modal-input" id="email">
                    <label for="Senha">Senha:</label>
                    <input type="password" name="senha" class="modal-input" id="senha">
                    <div class="boxbtn">
                        <button type="submit" 
                        class="btn-form">Entrar</button>
                        <button type="reset" class="btn-form">Limpar</button>
                        <p>Não tem? <a href="cadastrar.php">cadastre-se</a></p>
                    </div>    
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>