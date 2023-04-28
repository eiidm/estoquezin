<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../login_colaborador/login_colaborador.css">
    <title>Cadastro Colaborador</title>
</head>

<body>

    <div class="container">
        <div class="tela Um"> 
            <div class="colunaUm">
                <h2 class="texto texto-um">Cadastre seu colaborador</h2>
                <p class="descricao">Insira os dados do colaborador ao lado</p>
               </div>  <!--coluna usa um -->
            
            <div class="colunaDois">
            <h2 class="texto texto-dois">Cadastre aqui</h2>
                <form class="form" action="login_colaborador_back.php" method="post">
                    <label class="label-input" for="">
                        <i class="fa-solid fa-user icon"></i>
                        <input type="text" name="nome" placeholder="Nome" required>
                    </label>

                    <label class="label-input" for="">
                        <i class="fa-solid fa-id-card icon"></i>
                        <input type="text" name="cnpj" id="cnpj" maxlength="18" placeholder="CPF" required>
                    </label>
        
                    <button type = "submit" class="btn btn-dois">Cadastrar</button>
                </form>
            </div>  <!--coluna dois-->
        </div><!--tela um-->
    </div>  <!--container-->
    
</body>
</html>