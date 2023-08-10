<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./form_altera.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Alterando Grupo</title>
</head>

<body>
    <div class='cabecalho'>
        <input id='menu_to' type='checkbox' />
        <label class='menu_btn' for='menu_to'>
            <span></span>
        </label>
            <ul class='menu_box'>
                <li><a class='menu_item' href='../home/home_front.php'>Home</a></li>
                <li><a class='menu_item' href="../login_colaborador/login_colaborador_front.php">Colaborador</a></li>

                <li><a class='menu_topico'>Empresas</a></li>
                    <li><a class='menu_item' href='../login_empresa/cadastro_empresa_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_empresa/alterar_empresas_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='./alterar_grupos_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração/Exclusão</a></li>
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>
                    <li><a class='menu_item' href=''>Pedido de compra</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href='../cadastro_fornecedor/cadastro_fornecedor_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/alterar_fornecedores_front.php'>Alteração/Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->
 

    <div class="container">
        <h2 class="texto texto-um">Alteração de Grupo</h2>
        <div class="tela Um">
            <form class="form" action="./alterar_grupos_back.php" method="post">
                <div class="colunaUm">       
                    <?php
                        include ("../utils/conexao.php"); 

                        $sql= $conecta->query("SELECT * FROM nometabelagrupo WHERE id_fornecedor=".$_REQUEST["id_grupo"]);

                        $qtd= $sql->num_rows; 

                        if($qtd > 0)
                        {
                             print "<table>";
                            while($row = $sql->fetch_object())
                            {
                                print "<tr>";
                                print "<td>".$row->id_grupo."</td>";
                                print "<td>".$row->nomegrupo."</td>";
                                print "</tr>";                                 
                            }
                            print "</table>";
                        }else{
                                print "<p>Não encontrou resultados</p>";
                        }

                        mysqli_close($conecta); 
                    ?>                   
                </div><!--coluna um-->

                <div class="lado">
                    <button class="btn btn-dois">Alterar</button>
                </div>
            </form>
        </div><!--tela um-->
    </div><!--container-->
</body>
</html>