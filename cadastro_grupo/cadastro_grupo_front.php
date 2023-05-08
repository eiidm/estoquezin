<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../cadastro_grupo/cadastro_grupo.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Cadastro de Produtos</title>
</head>

<body>

    <div class="container">
   
        <div class="tela Um">
            <div class="colunaDois">
            <h2 class="texto texto-um">Cadastro de Grupos</h2>
<br>
                <form class="form" action="../cadastro_grupo/cadastro_grupo_back.php" method="post">                    
                    <label class="label-input" for="">
                        <input type="text" name="nomegrupo" placeholder="   Nome do grupo" required>
                    </label>

                    <button class="btn btn-dois">Cadastrar Grupo</button>
                </form>
              
            </div>  <!--coluna um -->
            
    
        </div>  <!--tela um-->
    </div><!--container-->

</body>
</html>